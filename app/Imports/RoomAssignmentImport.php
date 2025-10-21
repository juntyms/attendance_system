<?php

namespace App\Imports;

use App\Models\Room;
use App\Models\Student;
use App\Models\StudentRoom;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RoomAssignmentImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row) {
            //Get Room Id
            $room = Room::where('name', $row['room'])->first();

            $student = Student::where('student_id', $row['student_id'])->first();

            if (($room) && ($student)) {

                StudentRoom::updateOrCreate(
                    [
                        'student_id' => $student->id
                    ],
                    [
                        'room_id' => $room->id
                    ]
                );

                $student->update(['building_id' => $room->building_id, 'room_id'=> $room->id]);
            }

        }
    }
}
