<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {

        foreach ($rows as $row) {

            foreach ($rows as $row) {
                $room = Room::where('name', $row['a_room_num'])->first();

                // Start with an empty array and only add non-empty values
                $studentData = [];

                if (!empty($row['e_dsp_name'])) {
                    $studentData['student_name'] = $row['e_dsp_name'];
                }

                if (!empty($row['a_dsp_name'])) {
                    $studentData['student_name_ar'] = $row['a_dsp_name'];
                }

                if (!empty($row['tel1'])) {
                    $studentData['mobile_no'] = $row['tel1'];
                }

                if (!empty($row['nationality'])) {
                    $studentData['nationality_id'] = $row['nationality'];
                }

                if (!empty($row['status'])) {
                    $studentData['status_id'] = $row['status'];
                }

                if (!empty($row['national_id'])) {
                    $studentData['civilno'] = $row['national_id'];
                }


                if (!empty($row['from_date'])) {
                    try {
                        $studentData['date_of_joining'] = Carbon::parse($row['from_date'])->format('Y-m-d H:i:s');
                    } catch (\Exception $e) {
                        // fallback if the date format is invalid
                        $studentData['date_of_joining'] = Carbon::now()->format('Y-m-d H:i:s');
                    }
                }

                if (!empty($row['emergency_contact_person'])) {
                    $studentData['emergency_contact_person'] = $row['emergency_contact_person'];
                } else {
                    $studentData['emergency_contact_person'] = 'N/A';
                }

                if (!empty($row['Tel2'])) {
                    $studentData['emergency_no'] = $row['Tel2'];
                }

                if (!empty($row['emergency2_no'])) {
                    $studentData['emergency2_no'] = $row['emergency2_no'];
                } else {
                    $studentData['emergency2_no'] = 'N/A';
                }

                if (!empty($row['emergency3_no'])) {
                    $studentData['emergency3_no'] = $row['emergency3_no'];
                } else {
                    $studentData['emergency3_no'] = 'N/A';
                }

                // Always ensure email is set (based on student_id)
                if (!empty($row['univ_email'])) {
                    $studentData['email'] = $row['univ_email'];
                }

                // Add room_id only if room exists
                if ($room) {
                    $studentData['room_id'] = $room->id;
                    $studentData['building_id'] = $room->building_id;
                }

                // Use updateOrCreate
                Student::updateOrCreate(
                    ['student_id' => $row['id']],
                    $studentData
                );
            }
        }
    }
}
