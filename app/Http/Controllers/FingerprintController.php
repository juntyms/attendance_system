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
        $devices = Device::where('is_master',0)->get();

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
        $zk = new ZKTeco('192.168.100.22');

            if ($zk->connect()){

            $students = $zk->getUser();


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


}