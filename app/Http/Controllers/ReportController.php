<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\StudentLeave;
use Illuminate\Http\Request;
use App\Models\ReportSchedule;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    const attendance = 1;
    const absent = 2;
    const late = 3;

    const rview = 1;
    const rpdf = 2;

    public function schedule()
    {
        $report_schedules = ReportSchedule::all();

        return view('report.schedule')->with('report_schedules',$report_schedules);
    }

    public function saveschedule(Request $request)
    {
        $report_schedule = ReportSchedule::findOrFail(1);

        $report_schedule->update(['frequency_method'=>$request->frequency_method]);

        toast('Updated Schedule','success');

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

        $startDay =Carbon::parse($start_date)->startOfDay();
        $endDay = Carbon::parse($end_date)->endOfDay();

        $students = \DB::table('students')
                        ->select('id','student_id','student_name','email');


        $date_range = "WITH RECURSIVE date_ranges AS (
                        SELECT '".$start_date."' dt UNION ALL
                        SELECT dt + INTERVAL 1 DAY FROM date_ranges
                        WHERE dt + INTERVAL 1 DAY <= '".$end_date."')
                        SELECT dt FROM date_ranges";


        $attendance_ins = \DB::table('attendances')
                        ->select('student_id','type','punchtime as pin',\DB::RAW("DATE_FORMAT(punchtime,'%Y-%m-%d') as datein"))
                        ->whereBetween('punchtime',[$startDay, $endDay])
                        ->where('type',0);


        $attendance_outs = \DB::table('attendances')
                        ->select('student_id','type','punchtime as pout',\DB::RAW("DATE_FORMAT(punchtime,'%Y-%m-%d') as dateout"))
                        ->whereBetween('punchtime',[$startDay, $endDay])
                        ->where('type',1);

        if ($request->report_type == Self::attendance) {
            $report_type = "Full Attendance";
            $attendances = \DB::table('date_ranges')
                        ->withRecursiveExpression('date_ranges', $date_range, ['dt'])
                         ->joinSub($students, 'studs', function ($join) {
                            $join->on('studs.id','=','studs.id');
                        })
                        ->leftJoinSub($attendance_ins, 'punchin', function($join) {
                            $join->on('punchin.student_id','=','studs.student_id')
                                    ->on('dt','=','punchin.datein');
                        })
                        ->leftJoinSub($attendance_outs, 'punchout', function($join) {
                            $join->on('punchout.student_id','=','studs.student_id')
                                ->on('dt','=','punchout.dateout');
                        })
                        ->select('studs.id','studs.student_id','studs.student_name','studs.email','date_ranges.dt','punchin.pin','punchout.pout','punchin.datein','punchout.dateout')
                        ->orderBy('date_ranges.dt')
                        ->orderBy('studs.student_name')
                        ->get();
                        //dd($attendances);
        }

        if ($request->report_type == Self::absent) {
            $report_type = "Absences";

            $attendances = \DB::table('date_ranges')
                        ->withRecursiveExpression('date_ranges', $date_range, ['dt'])
                         ->joinSub($students, 'studs', function ($join) {
                            $join->on('studs.id','=','studs.id');
                        })
                        ->leftJoinSub($attendance_ins, 'punchin', function($join) {
                            $join->on('punchin.student_id','=','studs.student_id')
                                    ->on('dt','=','punchin.datein');
                        })
                        ->leftJoinSub($attendance_outs, 'punchout', function($join) {
                            $join->on('punchout.student_id','=','studs.student_id')
                                ->on('dt','=','punchout.dateout');
                        })
                        ->select('studs.id','studs.student_id','studs.student_name','studs.email','date_ranges.dt','punchin.pin','punchout.pout','punchin.datein','punchout.dateout')
                        ->whereNull('punchin.pin')
                        ->whereNull('punchout.pout')
                        ->orderBy('date_ranges.dt')
                        ->orderBy('studs.student_name')
                        ->get();
        }

        if ($request->report_type == Self::late) {
            $report_type = "Late";

            $student_leaves = StudentLeave::select('student_id',\DB::RAW("DATE_FORMAT(leave_date,'%Y-%m-%d') as leavedate"))
                        ->whereBetween('leave_date',[$startDay, $endDay])
                        ->whereNull('return_date')
                        ->get();

                        if ($request->has('ptype')) { //PDF Report Type
                            $pdf = Pdf::loadView('report._latepdf',[
                            'report_type' => $report_type,
                            'student_leaves'=>$student_leaves,
                            'start_date'=> $request->start_date,
                            'end_date'=>$request->end_date
                        ]);

                        return $pdf->download($report_type.'.pdf');

                        } else {
                            return view('report.latereport')
                                    ->with('start_date',$request->start_date)
                                    ->with('end_date',$request->end_date)
                                    ->with('report_type', $report_type)
                                    ->with('student_leaves',$student_leaves);
                        }
        }

        if (($request->report_type == Self::attendance) || ($request->report_type == Self::absent)) {
            if ($request->has('ptype')) {


                $pdf = Pdf::loadView('report._attendacepdf',[
                            'report_type' => $report_type,
                            'attendances'=>$attendances,
                            'start_date'=> $request->start_date,
                            'end_date'=>$request->end_date
                        ]);

                return $pdf->download($report_type.'.pdf');

            } else {
                return view('report.inoutreport')
                ->with('attendances',$attendances)
                ->with('start_date',$request->start_date )
                ->with('end_date',$request->end_date )
                ->with('report_type', $report_type);
            }
        }

    }


}