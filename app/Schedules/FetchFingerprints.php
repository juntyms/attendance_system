<?php

namespace App\Schedules;

use App\Models\Device;
use App\Models\Fingerprint;
use App\Models\Student;
use Illuminate\Support\Facades\Log;
use Exception;
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

                            $array_cnt = count($student_from_device["Row"]);
                            $multi = false;

                            foreach($student_from_device["Row"] as $array_check) {
                                if(is_array($array_check)) {
                                    $multi = true;
                                }
                            }



                            if ($multi) {
                                // More than 1 fingerprint registered
                                try {
                                    foreach($student_from_device as $key => $value) {
                                        for($i=0; $i < $array_cnt; $i++) {
                                            //echo $value[$i]["FingerID"];
                                            $student_fp = Fingerprint::where('student_id', $student->student_id)
                                                    ->where('fingerid', $value[$i]["FingerID"])
                                                    ->first();

                                            if ($student_fp) {
                                                // Update Record
                                                $student_fp->update(['template' => $value[$i]["Template"]]);

                                            } else {
                                                // Create new entry
                                                Fingerprint::create([
                                                    'student_id' => $student->student_id,
                                                    'fingerid' => $value[$i]["FingerID"],
                                                    'size' => $value[$i]["Size"],
                                                    'valid' => $value[$i]["Valid"],
                                                    'template' => $value[$i]["Template"]
                                                ]);
                                            }
                                        }
                                    }
                                } catch (\Exception $e) {

                                    Log::error('Fetch Multiple Fingerprints student id ' . $student->student_id . ' ' . $e->getMessage());



                                }

                            } else {
                                // Only 1 fingerprint Registered
                                try {
                                    // Query Student from the fingerprints table

                                    $student_fp = Fingerprint::where('student_id', $student->student_id)
                                                ->where('fingerid', $student_from_device["Row"]["FingerID"])
                                                ->first();

                                    if ($student_fp) {
                                        // Update Record
                                        $student_fp->update(['template' => $student_from_device["Row"]["Template"]]);

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
                                } catch (\Exception $e) {

                                    Log::error('Fetch Single Fingerprints student id ' . $student->student_id .' ' . $e->getMessage());


                                }
                            }

                    }
                }
            }
        }
    }
}
