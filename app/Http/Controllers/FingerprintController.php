<?php

namespace App\Http\Controllers;

use TADPHP\TAD;
use App\Models\Device;
use TADPHP\TADFactory;
use App\Models\Student;
use App\Models\Attendance;
use App\Models\Fingerprint;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FingerprintController extends Controller
{

    public function fetchattendance()
    {
        //Get The Master Device
        $devices = Device::where('is_master',1)->get();

        foreach($devices as $device)
        {
            if ($device) {
                $tad_factory = new TADFactory(['ip'=>$device->ip]);
                $tad = $tad_factory->get_instance();

                if ($tad->is_alive())
                {

                    $logs = $tad->get_att_log()->to_array();
//dd($logs);
                    foreach($logs["Row"] as $attendance) {

                        try {

                            $check_attendance = Attendance::where('student_id',$attendance['PIN'])
                                                        ->where('punchtime',$attendance['DateTime'])
                                                        ->where('device_id', $device->id)
                                                        ->first();

                            if (empty($check_attendance)) {

                                Attendance::create([
                                        'student_id'=>$attendance['PIN'],
                                        'state_id' => $attendance['Status'],
                                        'punchtime'=> $attendance['DateTime'],
                                        'type'=> $attendance['WorkCode'],
                                        'device_id'=> $device->id
                                    ]);

                            }

                        } catch (\Exception $e) {

                            Log::error('Student ID : ' .$e->getMessage());

                        }
                    }
                }
            }
        }
    }



    public function fetchstudents()
    {
        $zk = new ZKTeco('192.168.100.20');

            if ($zk->connect()){

            $students = $zk->getUser();

//dd($students);
                foreach($students as $student) {
                    /*
                    Attendance::create([
                        'uid'=>$attendance['uid'],
                        'student_id'=>$attendance['id'],
                        'state_id'=>$attendance['state'],
                        'punchtime'=>$attendance['timestamp'],
                        'type'=>$attendance['type']
                    ]);*/
                    $current_student = Student::where('student_id',$student['userid'])->first();

                    if (empty($current_student))
                    {
                        Student::create([
                            'is_pushed' => '1',
                            'student_id' => $student['userid'],
                            'student_name' => $student['name'],
                            'email' => $student['userid'] . '@student.du.edu.om',
                        ]);
                    }
                }
            }
    }

    public function setdate()
    {
        $zk = new ZKTeco('192.168.100.25');

        if ($zk->connect()) {

            $zk->setTime(now()->format('Y-m-d H:m:s'));

        }
    }

    public function fetchfp()
    {
        // $fingerprint = Fingerprint::where('student_id','202311034')->first();

        // dd($fingerprint->student->student_name);

        //$device = Device::where('is_master',1)->first();

       // if ($device) {
            $tad_factory = new TADFactory(['ip'=>'192.168.100.25']);
            $tad = $tad_factory->get_instance();

            if ($tad->is_alive())
            {
                //echo(now()->format('Y-m-d H:m:s'));
                $response = $tad->set_date();

                dd($response);
                //Get the Students List
                //$students = Student::where('status_id',1)->get();

             //   $student = Student::where('student_id','202311188')->first();


                //getting user info

                // $student_device_info = $tad->get_user_template(['pin' => '2222'])->to_array();

                // dd(count($student_device_info));



                //$student_from_device = $tad->get_user_template(['pin' => $student->student_id])->to_array();

                //dd($student_from_device);
                //echo count($student_from_devices);
                // dd(count($student_from_devices["Row"]));
                // $array_cnt = count($student_from_devices["Row"]);
                // foreach($student_from_devices as $student_from_device => $value) {
                //     for($i=0; $i < $array_cnt; $i++) {
                //         echo $value[$i]["FingerID"];
                //     }
                //     //echo($value[0]["FingerID"]);
                // }

                // $array_cnt = count($student_from_device);

                // //dd($array_cnt);

                // $multi = false;

                // foreach($student_from_device["Row"] as $array_check) {
                //     if(is_array($array_check)) {
                //         $multi = true;
                //     }
                // }

                // dd($multi);

                // if ($array_cnt > 1) {

                //     foreach($student_from_device as $key => $value) {
                //         for($i=0; $i < $array_cnt; $i++) {
                //             //echo $value[$i]["FingerID"];
                //             echo $value[$i]["FingerID"] . '<br />'                        ;

                //             $student_fp = Fingerprint::where('student_id', $student->student_id)
                //                     ->where('fingerid', $value[$i]["FingerID"])
                //                     ->first();

                //             if ($student_fp) {
                //                 // Update Record
                //                 //$student_fp->update(['template' => $value[$i]["Template"]]);

                //             } else {
                //                 // Create new entry
                //                 // Fingerprint::create([
                //                 //     'student_id' => $student->student_id,
                //                 //     'fingerid' => $value[$i]["FingerID"],
                //                 //     'size' => $value[$i]["Size"],
                //                 //     'valid' => $value[$i]["Valid"],
                //                 //     'template' => $value[$i]["Template"]
                //                 // ]);
                //             }
                //         }
                //     }

                // }


                //Loop through the students table
                // foreach($students as $student)
                // {
                //     // Fetch Student from device
                //     $student_from_device = $tad->get_user_template(['pin'=>$student->student_id])->to_array();

                //     dd($student_from_device );
                //     //Check if Recourd exist on device
                //     if (!empty($student_from_device)) {
                //         // Query Student from the fingerprints table
                //         //dd($student_from_device["Row"]["FingerID"]);
                //         $student_fp = Fingerprint::where('student_id',$student->student_id)
                //                             ->where('fingerid',$student_from_device["Row"]["FingerID"])
                //                             ->first();

                //         // Check if Student exists on the table
                //         if ($student_fp) {
                //             // Update Record
                //             $student_fp->update(['fingerid'=>$student_from_device["Row"]["Template"]]);
                //         } else {
                //             // Create new entry
                //             Fingerprint::create([
                //                 'student_id' => $student->student_id,
                //                 'fingerid' => $student_from_device["Row"]["FingerID"],
                //                 'size' => $student_from_device["Row"]["Size"],
                //                 'valid'=> $student_from_device["Row"]["Valid"],
                //                 'template'=> $student_from_device["Row"]["Template"]
                //             ]);
                //         }
                //     }
                // }
            }
        //}
    }

}
