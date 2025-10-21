<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {

        foreach($rows as $row) {
            Student::updateOrCreate(
                [
                    'student_id' => $row['student_id']
                ],
                [
                    'student_name' => $row['student_name'] ?? "",
                    'student_name_ar' => $row['student_name_ar'] ?? "",
                    'email' => $row['student_id'] . '@du.edu.om',
                    'mobile_no' => $row['mobileno'],
                    'nationality_id' => $row['nationality'] ?? '1',
                    'status_id' => $row['status'] ?? '1',
                    'civilno' => $row['civilno'] ?? "",
                    'building_id' => $row['building'] ?? null,
                    'date_of_joining' => $row['date_of_joining'] ?? Carbon::now(),
                    'emergency_contact_person' => $row['emergency_contact_person'] ?? "0",
                    'emergency_no' => $row['emergency_no'] ?? "0",
                    'emergency2_no' => $row['emergency2_no'] ?? "0",
                    'emergency3_no' => $row['emergency3_no'] ?? "0"
                ]
            );
        }


    }


}
