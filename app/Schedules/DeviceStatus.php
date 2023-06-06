<?php

namespace App\Schedules;

use App\Models\Device;
use TADPHP\TADFactory;

class deviceStatus
{

    public function __invoke()
    {
        $devices = Device::get();

        foreach($devices as $device)
        {
            $tad_factory = new TADFactory(['ip'=>$device->ip]);

            $tad = $tad_factory->get_instance();

            if ($tad->is_alive())
            {
                $device->update(['status'=>'Active']);
            } else {
                $device->update(['status'=>'In-Active']);
            }
        }
    }

}