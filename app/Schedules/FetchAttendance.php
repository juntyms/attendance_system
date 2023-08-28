<?php

namespace App\Schedules;

use App\Models\Attendance;
use App\Models\Device;
use TADPHP\TADFactory;

class FetchAttendance
{
    public function __invoke()
    {
        //Get The Master Device
        $devices = Device::where('is_master', 0)->get();

        foreach($devices as $device) {
            if ($device) {
                $tad_factory = new TADFactory(['ip' => $device->ip]);
                $tad = $tad_factory->get_instance();

                if ($tad->is_alive()) {
                    //$zk = new ZKTeco($device->ip);

                    //$zk->connect();

                    //dd($zk->getAttendance());
                    $logs = $tad->get_att_log()->to_array();

                    foreach($logs["Row"] as $attendance) {
                        $check_attendance = Attendance::where('student_id', $attendance['PIN'])
                                                    ->where('punchtime', $attendance['DateTime'])
                                                    ->where('device_id', $device->id)
                                                    ->first();

                        if (empty($check_attendance)) {
                            Attendance::create([
                                    'student_id' => $attendance['PIN'],
                                    'state_id' => $attendance['Status'],
                                    'punchtime' => $attendance['DateTime'],
                                    'type' => $attendance['WorkCode'],
                                    'device_id' => $device->id
                                ]);
                        }
                    }
                }
            }
        }
    }
}
