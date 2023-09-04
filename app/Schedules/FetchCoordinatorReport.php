<?php

namespace App\Schedules;

use App\Models\Attendance;
use App\Mail\CoordinatorReport;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class FetchCoordinatorReport
{
    public function __invoke()
    {
        //$startDay = Carbon::today()->subMonth()->startOfDay();
        $startDay = Carbon::today()->startOfDay();
        $endDay = Carbon::today()->endOfDay();

        $start_date = Carbon::instance(date_create($startDay))->format('Y-m-d');
        $end_date = Carbon::instance(date_create($endDay))->format('Y-m-d');


        $coordinators = \DB::table('coordinators')
                            ->join('users', 'users.id', '=', 'coordinators.user_id')
                            ->select('users.name', 'users.email', 'coordinators.building_id')
                            ->get();

        foreach($coordinators as $coordinator) {

            // Generate report and send to Coordinators
            $students = \DB::table('students')
                            ->select('id', 'student_id', 'student_name', 'email')
                            ->where('building_id', $coordinator->building_id);


            $date_range = "WITH RECURSIVE date_ranges AS (
                            SELECT '".$start_date."' dt UNION ALL
                            SELECT dt + INTERVAL 1 DAY FROM date_ranges
                            WHERE dt + INTERVAL 1 DAY <= '".$end_date."')
                            SELECT dt FROM date_ranges";


            $attendance_ins = \DB::table('attendances')
                            ->select('student_id', 'type', 'punchtime as pin', \DB::RAW("DATE_FORMAT(punchtime,'%Y-%m-%d') as datein"))
                            ->whereBetween('punchtime', [$startDay, $endDay])
                            ->where('type', 0);


            $attendance_outs = \DB::table('attendances')
                            ->select('student_id', 'type', 'punchtime as pout', \DB::RAW("DATE_FORMAT(punchtime,'%Y-%m-%d') as dateout"))
                            ->whereBetween('punchtime', [$startDay, $endDay])
                            ->where('type', 1);

            $attendances = \DB::table('date_ranges')
                            ->withRecursiveExpression('date_ranges', $date_range, ['dt'])
                            ->joinSub($students, 'studs', function ($join) {
                                $join->on('studs.id', '=', 'studs.id');
                            })
                            ->leftJoinSub($attendance_ins, 'punchin', function ($join) {
                                $join->on('punchin.student_id', '=', 'studs.student_id')
                                        ->on('dt', '=', 'punchin.datein');
                            })
                            ->leftJoinSub($attendance_outs, 'punchout', function ($join) {
                                $join->on('punchout.student_id', '=', 'studs.student_id')
                                    ->on('dt', '=', 'punchout.dateout');
                            })
                            ->select('studs.id', 'studs.student_id', 'studs.student_name', 'studs.email', 'date_ranges.dt', 'punchin.pin', 'punchout.pout', 'punchin.datein', 'punchout.dateout')
                            ->orderBy('date_ranges.dt')
                            ->orderBy('studs.student_name')
                            ->get();

            Mail::to($coordinator->email)->send(new CoordinatorReport($attendances));
        }

    }
}
