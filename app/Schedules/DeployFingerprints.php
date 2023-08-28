<?php

namespace App\Schedules;

use App\Models\Device;
use App\Models\Fingerprint;
use TADPHP\TADFactory;

class DeployFingerprints
{
    public function __invoke()
    {
        $devices = Device::where('is_master', 0)->get();

        foreach($devices as $device) {
            $tad_factory = new TADFactory(['ip' => $device->ip]);

            $tad = $tad_factory->get_instance();

            if ($tad->is_alive()) {
                $fingerprints = Fingerprint::all();

                foreach($fingerprints as $fingerprint) {
                    $user_template_data = [
                        'pin' => $fingerprint->student_id,
                        'finger_id' => $fingerprint->fingerid, // First fingerprint has 0 as index.
                        'size' => $fingerprint->size,    // Be careful, this is not string length of $template1_vx9 var.
                        'valid' => $fingerprint->valid,
                        'template' => $fingerprint->template
                    ];

                    $tad->set_user_template($user_template_data);
                }
            }
        }
    }
}
