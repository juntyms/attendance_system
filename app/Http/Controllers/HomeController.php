<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $students = DB::table('students')
                    ->join('buildings','buildings.id','=','students.building_id')
                    ->select(DB::raw("count(students.id) value"),'buildings.name')
                    ->groupBy('buildings.name')
                    ->get();

//dd($students);

        return view('home')
            ->with('students',$students);
    }
}