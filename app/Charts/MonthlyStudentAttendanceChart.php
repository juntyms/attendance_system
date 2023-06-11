<?php

namespace App\Charts;

use DB;
use App\Models\Attendance;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyStudentAttendanceChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->barChart()
            ->setTitle('Monthly Attendance')
            ->addData('Students',
                Attendance::select(DB::raw("count(id) as totalcount"), DB::raw("Year(punchtime) Year"), DB::raw("Month(punchtime) Month"))
                ->groupBy('Year','Month')
                ->pluck('totalcount')->toArray()
            )
            ->setLabels(
                Attendance::select(DB::raw("DATE_FORMAT(punchtime,'%m-%Y') as YM"), DB::raw('YEAR(punchtime) year, MONTH(punchtime) month'))
                ->groupBy('year','month','YM')
                ->pluck('YM')->toArray()
            );
    }
}

