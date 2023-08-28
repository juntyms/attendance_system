<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\StudentLeave;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;


class LateExport implements FromView
{
    use Exportable;

    public function __construct($student_leaves)
    {

        $this->student_leaves = $student_leaves;

    }

    public function view(): View
    {


        $student_leaves = $this->student_leaves;

        return view('report._lateexcel',['student_leaves' => $student_leaves]);

    }
}