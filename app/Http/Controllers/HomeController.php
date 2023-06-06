<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyStudentAttendanceChart;
use App\Models\Attendance;
use Illuminate\Http\Request;

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

        $att = Attendance::with('device:name')
                    ->get()
                    ->toArray();
        //dd($att);


        return view('home')->with('studentAttendancechart',$studentAttendance->build());
    }
}