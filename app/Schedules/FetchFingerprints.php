<?php

namespace App\Schedules;

use App\Models\Device;
use App\Models\Fingerprint;
use App\Models\Student;
use TADPHP\TADFactory;

class FetchFingerprints
{
    public function __invoke()
    {
        //Get The Master Device
        $device = Device::where('is_master', 1)->first();

        if ($device) {
            $tad_factory = new TADFactory(['ip' => $device->ip]);
            $tad = $tad_factory->get_instance();

            if ($tad->is_alive()) {
                //Get the Students List
                $students = Student::where('status_id', 1)->get();

                //Loop through the students table
                foreach($students as $student) {
                    // Fetch Student from device
                    $student_from_device = $tad->get_user_template(['pin' => $student->student_id])->to_array();
                    //Check if Recourd exist on device
                    if (!empty($student_from_device)) {
                        // Query Student from the fingerprints table
                        //dd($student_from_device["Row"]["FingerID"]);
                        $student_fp = Fingerprint::where('student_id', $student->student_id)
                                            ->where('fingerid', $student_from_device["Row"]["FingerID"])
                                            ->first();

                        // Check if Student exists on the table
                        if ($student_fp) {
                            // Update Record
                            $student_fp->update(['fingerid' => $student_from_device["Row"]["Template"]]);
                        } else {
                            // Create new entry
                            Fingerprint::create([
                                'student_id' => $student->student_id,
                                'fingerid' => $student_from_device["Row"]["FingerID"],
                                'size' => $student_from_device["Row"]["Size"],
                                'valid' => $student_from_device["Row"]["Valid"],
                                'template' => $student_from_device["Row"]["Template"]
                            ]);
                        }
                    }
                }
            }
        }
    }
}
