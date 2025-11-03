<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Charts\MonthlyStudentAttendanceChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*
                $att = Attendance::select(DB::raw("count(id) as totalcount"), DB::raw("DATE_FORMAT(punchtime,'%Y') Year"))
                        ->groupBy('Year')
                        ->pluck('totalcount'); */

        /*
        $att = Attendance::select(DB::raw("DATE_FORMAT(punchtime,'%Y') Year"))
                ->groupBy('Year')
                ->pluck('Year');*/

        //dd($att);
        /*
        $students = DB::table('students')
                    ->join('buildings','buildings.id','=','students.building_id')
                    ->select(DB::raw("count(students.id) value"),'buildings.name')
                    ->groupBy('buildings.name')
                    ->get();
        */
        $students = [];
        //Check user role
        if (Auth::user()->hasRole('Coordinator')) {
            //Check coordinator Building Assignment
            $is_building = \DB::table('coordinators')->where('user_id', Auth::user()->id)->first();

            if ($is_building) {
                $building_rooms = \DB::table('rooms')->select('id')->where('building_id', $is_building->id)->pluck('id');

                // $students = DB::table('student_rooms')
                //     ->join('rooms', 'rooms.id', '=', 'student_rooms.room_id')
                //     ->join('buildings', 'buildings.id', '=', 'rooms.building_id')
                //     ->whereIn('student_rooms.room_id', $building_rooms)
                //     ->select(DB::raw("count(student_rooms.student_id) value"), 'buildings.name')
                //     ->groupBy('buildings.name')
                //     ->get();

                $students = DB::table('students')
                    ->join('rooms', 'rooms.id', '=', 'students.room_id')
                    ->join('buildings', 'buildings.id', '=', 'rooms.building_id')
                    ->where('students.status_id', '=', 1)
                    ->whereIn('rooms.id', $building_rooms)
                    ->select(DB::raw("count(students.id) value"), 'buildings.name')
                    ->groupBy('buildings.name')
                    ->get();
            }
        }

        if (Auth::user()->hasRole('super-admin')) {
            // $students = DB::table('student_rooms')
            //     ->join('rooms', 'rooms.id', '=', 'student_rooms.room_id')
            //     ->join('buildings', 'buildings.id', '=', 'rooms.building_id')
            //     ->select(DB::raw("count(student_id) value"), 'buildings.name')
            //     ->groupBy('buildings.name')
            //     ->get();
            $students = DB::table('students')
                ->join('rooms', 'rooms.id', '=', 'students.room_id')
                ->join('buildings', 'buildings.id', '=', 'rooms.building_id')
                ->where('students.status_id', '=', 1)
                ->select(DB::raw("count(students.id) value"), 'buildings.name')
                ->groupBy('buildings.name')
                ->get();
        }

        //dd($students);

        return view('home')
            ->with('students', $students);
    }
}
