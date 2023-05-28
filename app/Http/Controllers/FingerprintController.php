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
        $device = Device::where('is_master',0)->first();

        if ($device) {
            $tad_factory = new TADFactory(['ip'=>$device->ip]);
            $tad = $tad_factory->get_instance();

            if ($tad->is_alive())
            {

                $students = Student::all();

                foreach($students as $student)
                {
                    $student_from_device = $tad->get_att_log(['pin'=>$student->student_id])->to_array();

                    foreach($student_from_device as $attendance)
                    {
//dd($attendance["DateTime"]);
                        $pin = $attendance["PIN"] ?? 0;
                        $datetime = $attendance["DateTime"] ?? "(Null)";
                        $status = $attendance["Status"] ?? 0;
                        $workcode = $attendance["WorkCode"] ?? 0;

                        if ($pin !=0) {
                            $check_attendance = Attendance::where('student_id',$pin)
                                                    ->where('punchtime',$datetime)
                                                    ->where('device_id', $device->id)
                                                    ->first();

                            if (empty($check_attendance))
                            {
                                Attendance::create([
                                    'student_id'=>$pin,
                                    'state_id' => $status,
                                    'punchtime'=> $datetime,
                                    'type'=> $workcode,
                                    'device_id'=> $device->id
                                ]);

                            }
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