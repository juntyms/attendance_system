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
                    //$zk = new ZKTeco($device->ip);

                    //$zk->connect();

                    //dd($zk->getAttendance());
                    $logs = $tad->get_att_log()->to_array();
//dd($logs);
                    foreach($logs["Row"] as $attendance){
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

    public function fetchfp()
    {
        //$device = Device::where('is_master',1)->first();

       // if ($device) {
            $tad_factory = new TADFactory(['ip'=>'192.168.100.20']);
            $tad = $tad_factory->get_instance();

            if ($tad->is_alive())
            {
                //Get the Students List
                $students = Student::where('status_id',1)->get();

                //Loop through the students table
                foreach($students as $student)
                {
                    // Fetch Student from device
                    $student_from_device = $tad->get_user_template(['pin'=>$student->student_id])->to_array();

                    dd($student_from_device );
                    //Check if Recourd exist on device
                    if (!empty($student_from_device)) {
                        // Query Student from the fingerprints table
                        //dd($student_from_device["Row"]["FingerID"]);
                        $student_fp = Fingerprint::where('student_id',$student->student_id)
                                            ->where('fingerid',$student_from_device["Row"]["FingerID"])
                                            ->first();

                        // Check if Student exists on the table
                        if ($student_fp) {
                            // Update Record
                            $student_fp->update(['fingerid'=>$student_from_device["Row"]["Template"]]);
                        } else {
                            // Create new entry
                            Fingerprint::create([
                                'student_id' => $student->student_id,
                                'fingerid' => $student_from_device["Row"]["FingerID"],
                                'size' => $student_from_device["Row"]["Size"],
                                'valid'=> $student_from_device["Row"]["Valid"],
                                'template'=> $student_from_device["Row"]["Template"]
                            ]);
                        }
                    }
                }
            }
        //}
    }

}
