<?php

namespace App\Schedules;

use App\Models\Device;
use TADPHP\TADFactory;

class DeviceStatus
{
    public function __invoke()
    {
        $devices = Device::get();

        foreach($devices as $device) {
            $tad_factory = new TADFactory(['ip' => $device->ip]);

            $tad = $tad_factory->get_instance();

            if ($tad->is_alive()) {
                $device->update(['status' => 'Active']);

                // Push server date to device to sync server and device



            } else {
                $device->update(['status' => 'In-Active']);
            }
        }
    }
}
