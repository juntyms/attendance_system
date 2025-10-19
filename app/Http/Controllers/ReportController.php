<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Exports\LateExport;
use App\Models\Coordinator;
use App\Models\StudentLeave;
use Illuminate\Http\Request;

use App\Models\ReportSchedule;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\AttendanceExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    const attendance = 1;
    const absent = 2;
    const late = 3;

    const rview = 1;
    const rpdf = 2;
    const rexcel = 3;

    public function schedule()
    {
        $report_schedules = ReportSchedule::all();

        return view('report.schedule')->with('report_schedules', $report_schedules);
    }

    public function saveschedule(Request $request)
    {
        $report_schedule = ReportSchedule::findOrFail(1);

        $report_schedule->update(['frequency_method' => $request->frequency_method]);

        toast('Updated Schedule', 'success');

        return redirect()->route('report.schedule');
    }

    public function inout()
    {
        return view('report.inout');
    }

    public function postinout(Request $request)
    {
        //dd($request->all());

        $start_date = Carbon::instance(date_create($request->start_date))->format('Y-m-d');
        $end_date = Carbon::instance(date_create($request->end_date))->format('Y-m-d');

        $startDay = Carbon::parse($start_date)->startOfDay();
        $endDay = Carbon::parse($end_date)->endOfDay();

        $students = \DB::table('students')
            ->select('id', 'student_id', 'student_name', 'email', 'building_id', 'mobile_no');


        $date_range = "WITH RECURSIVE date_ranges AS (
                        SELECT '" . $start_date . "' dt UNION ALL
                        SELECT dt + INTERVAL 1 DAY FROM date_ranges
                        WHERE dt + INTERVAL 1 DAY <= '" . $end_date . "')
                        SELECT dt FROM date_ranges";

        $attendance_ins = \DB::table('attendances')
            ->select(
                'device_id',
                'student_id',
                'type',
                \DB::RAW("DATE_FORMAT(punchtime,'%Y-%m-%d') as datein"),
                \DB::raw("MIN(punchtime) as pin")
            )
            ->whereBetween('punchtime', [$startDay, $endDay])
            ->where('type', 0)
            ->groupBy('device_id', 'student_id', 'type', \DB::raw("DATE_FORMAT(punchtime, '%Y-%m-%d')"));

        /*
        $attendance_outs = \DB::table('attendances')
            ->select('student_id', 'type', 'punchtime as pout', \DB::RAW("DATE_FORMAT(punchtime,'%Y-%m-%d') as dateout"))
            ->whereBetween('punchtime', [$startDay, $endDay])
            ->where('type', 1); */

        $device_locations = \DB::table('devices')
            ->leftjoin('buildings', 'buildings.id', '=', 'devices.building_id')
            ->select('devices.id as deviceid', 'devices.name as devicename', 'buildings.id as buildingid', 'buildings.name as buildingname');



        $attendances = [];

        if ($request->report_type == Self::attendance) {
            $report_type = "Full Attendance";

            if (Auth::user()->coordinator) {

                $attendances = \DB::table('date_ranges')
                    ->withRecursiveExpression('date_ranges', $date_range, ['dt'])
                    ->joinSub($students, 'studs', function ($join) {
                        $join->on('studs.id', '=', 'studs.id');
                    })
                    ->leftJoinSub($attendance_ins, 'punchin', function ($join) {
                        $join->on('punchin.student_id', '=', 'studs.student_id')
                            ->on('dt', '=', 'punchin.datein');
                    })

                    ->leftjoin('student_rooms', 'student_rooms.student_id', '=', 'studs.id')
                    ->leftjoin('rooms', 'rooms.id', '=', 'student_rooms.room_id')
                    ->leftjoin('buildings', 'buildings.id', '=', 'studs.building_id')
                    ->select(
                        'buildings.name as buildingname',
                        'rooms.name as roomname',
                        'studs.id',
                        'studs.student_id',
                        'studs.student_name',
                        'studs.email',
                        'studs.mobile_no',
                        'date_ranges.dt',
                        'punchin.pin',

                        'punchin.datein',

                    )
                    ->where('studs.building_id', '=', Auth::user()->coordinator->building_id)
                    ->whereNotNull('punchin.datein')
                    ->orderBy('date_ranges.dt')
                    ->orderBy('studs.student_name')
                    ->get();
            } else {

                if (Auth::user()->hasRole('super-admin')) {

                    $attendances = \DB::table('date_ranges')
                        ->withRecursiveExpression('date_ranges', $date_range, ['dt'])
                        ->joinSub($students, 'studs', function ($join) {
                            $join->on('studs.id', '=', 'studs.id');
                        })
                        ->leftJoinSub($attendance_ins, 'punchin', function ($join) {
                            $join->on('punchin.student_id', '=', 'studs.student_id')
                                ->on('dt', '=', 'punchin.datein');
                        })

                        ->leftjoin('student_rooms', 'student_rooms.student_id', '=', 'studs.id')
                        ->leftjoin('rooms', 'rooms.id', '=', 'student_rooms.room_id')
                        ->leftjoin('buildings', 'buildings.id', '=', 'studs.building_id')
                        ->select(
                            'buildings.name as buildingname',
                            'rooms.name as roomname',
                            'studs.id',
                            'studs.student_id',
                            'studs.student_name',
                            'studs.email',
                            'studs.mobile_no',
                            'date_ranges.dt',
                            'punchin.pin',

                            'punchin.datein',

                        )
                        ->whereNotNull('punchin.datein')
                        ->orderBy('buildingname')
                        ->orderBy('date_ranges.dt')
                        ->orderBy('studs.student_name')
                        ->get();
                }
            }
        }

        if ($request->report_type == Self::absent) {
            $report_type = "Absences";

            if (Auth::user()->coordinator) {

                $attendances = \DB::table('date_ranges')
                    ->withRecursiveExpression('date_ranges', $date_range, ['dt'])
                    ->joinSub($students, 'studs', function ($join) {
                        $join->on('studs.id', '=', 'studs.id');
                    })
                    ->leftJoinSub($attendance_ins, 'punchin', function ($join) {
                        $join->on('punchin.student_id', '=', 'studs.student_id')
                            ->on('dt', '=', 'punchin.datein');
                    })

                    ->leftjoin('student_rooms', 'student_rooms.student_id', '=', 'studs.id')
                    ->leftjoin('rooms', 'rooms.id', '=', 'student_rooms.room_id')
                    ->leftjoin('buildings', 'buildings.id', '=', 'studs.building_id')
                    ->select(
                        'buildings.name as buildingname',
                        'rooms.name as roomname',
                        'studs.id',
                        'studs.student_id',
                        'studs.student_name',
                        'studs.email',
                        'studs.mobile_no',
                        'date_ranges.dt',
                        'punchin.pin',

                        'punchin.datein',

                    )
                    ->whereNull('punchin.datein')
                    ->where('studs.building_id', '=', Auth::user()->coordinator->building_id)
                    ->orderBy('date_ranges.dt')
                    ->orderBy('studs.student_name')
                    ->get();
            } else {
                if (Auth::user()->hasRole('super-admin')) {
                    $attendances = \DB::table('date_ranges')
                        ->withRecursiveExpression('date_ranges', $date_range, ['dt'])
                        ->joinSub($students, 'studs', function ($join) {
                            $join->on('studs.id', '=', 'studs.id');
                        })
                        ->leftJoinSub($attendance_ins, 'punchin', function ($join) {
                            $join->on('punchin.student_id', '=', 'studs.student_id')
                                ->on('dt', '=', 'punchin.datein');
                        })

                        ->leftjoin('student_rooms', 'student_rooms.student_id', '=', 'studs.id')
                        ->leftjoin('rooms', 'rooms.id', '=', 'student_rooms.room_id')
                        ->leftjoin('buildings', 'buildings.id', '=', 'studs.building_id')
                        ->select(
                            'buildings.name as buildingname',
                            'rooms.name as roomname',
                            'studs.id',
                            'studs.student_id',
                            'studs.student_name',
                            'studs.email',
                            'studs.mobile_no',
                            'date_ranges.dt',
                            'punchin.pin',

                            'punchin.datein',

                        )
                        ->whereNull('punchin.datein')
                        ->orderBy('date_ranges.dt')
                        ->orderBy('studs.student_name')
                        ->get();
                }
            }
        }

        if ($request->report_type == Self::late) {
            $report_type = "Late";

            $student_leaves = StudentLeave::select('student_id', \DB::RAW("DATE_FORMAT(leave_date,'%Y-%m-%d') as leavedate"))
                ->whereBetween('leave_date', [$startDay, $endDay])
                ->whereNull('return_date')
                ->get();

            if ($request->ptype == Self::rview) {
                return view('report.latereport')
                    ->with('report_type', $report_type)
                    ->with('student_leaves', $student_leaves)
                    ->with('start_date', $request->start_date)
                    ->with('end_date', $request->end_date);
            }

            if ($request->ptype == Self::rpdf) {
                $pdf = Pdf::loadView('report._latepdf', [
                    'report_type' => $report_type,
                    'student_leaves' => $student_leaves,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date
                ]);

                return $pdf->download($report_type . '.pdf');
            }


            if ($request->ptype == Self::rexcel) {
                return Excel::download(new LateExport($student_leaves), 'Late.xlsx');
            }
        }

        if (($request->report_type == Self::attendance) || ($request->report_type == Self::absent)) {
            if ($request->ptype == Self::rview) {
                return view('report.inoutreport')
                    ->with('attendances', $attendances)
                    ->with('start_date', $request->start_date)
                    ->with('end_date', $request->end_date)
                    ->with('report_type', $report_type);
            }

            if ($request->ptype == Self::rpdf) {
                $pdf = Pdf::loadView('report._attendancepdf', [
                    'report_type' => $report_type,
                    'attendances' => $attendances,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date
                ]);

                return $pdf->download($report_type . '.pdf');
            }

            if ($request->ptype == Self::rexcel) {
                return Excel::download(new AttendanceExport($attendances), 'attendance.xlsx');
            }
        }
    }

    public function reporttest()
    {
        $coordinators = \DB::table('coordinators')
            ->join('users', 'users.id', '=', 'coordinators.user_id')
            ->select('users.email')
            ->pluck('users.email');


        dd($coordinators);
    }
}
