<?php

namespace App\Schedules;

use App\Models\Device;
use TADPHP\TADFactory;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

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

                    $logs = $tad->get_att_log()->to_array();

                    foreach($logs as $key => $attendance) {

                        // Log::info($logs[$key]['PIN']);
                        // Log::info($logs[$key]['status']);
                        // Log::info($logs[$key]['DateTime']);

                        $check_attendance = Attendance::where('student_id', $attendance['PIN'])
                                                    ->where('punchtime', $attendance['DateTime'])
                                                    ->where('device_id', $device->id)
                                                    ->count();

                        if ($check_attendance === 0) {
                            $dateTime = Carbon::parse($attendance['DateTime']);
                            Attendance::create([
                                    'student_id' => $attendance['PIN'],
                                    'state_id' => $attendance['Status'],
                                    'punchtime' => $dateTime,
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