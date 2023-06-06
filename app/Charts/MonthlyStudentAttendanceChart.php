<?php

namespace App\Charts;

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
        return $this->chart->pieChart()
            ->setTitle('Building Attendance')
            ->addData(['device',
                Attendance::select(\DB::raw('device_id,count(id) as totalcount'))
                    ->groupBy('device_id')
                    ->get()->toArray()
            ])
            ->setLabels(['January', 'February', 'March', 'April', 'May', 'June','july','August','September','October','November','December']);
    }
}