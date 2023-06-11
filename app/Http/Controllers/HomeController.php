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
    public function index(MonthlyStudentAttendanceChart $studentAttendance)
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


        return view('home')->with('studentAttendancechart',$studentAttendance->build());
    }
}