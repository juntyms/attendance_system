<?php

namespace App\Http\Controllers;

use App\Models\ReportSchedule;
use Illuminate\Http\Request;

class ReportController extends Controller
{
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
}