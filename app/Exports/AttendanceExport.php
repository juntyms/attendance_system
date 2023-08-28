<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;


class AttendanceExport implements FromView
{
    use Exportable;

    public function __construct($attendances)
    {
        $this->attendances = $attendances;
    }

    public function view(): View
    {
        $attendances = $this->attendances;

        return view('report._attendanceexcel',[
            'attendances'=>$attendances
        ]);
    }
}