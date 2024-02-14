<?php

namespace App\Schedules;

use App\Models\Device;
use TADPHP\TADFactory;
use App\Models\Fingerprint;


class DeployFingerprints
{
    public function __invoke()
    {
        $devices = Device::where('is_master', 0)->get();

        foreach($devices as $device) {
            try {

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

                        try {

                            $tad->set_user_template($user_template_data);

                        } catch (\Exception $e) {

                            Log::error($fingerprint->student_id . ' Error setting user template for fingerprint: ' . $e->getMessage());

                            continue;
                        }
                    }
                }
            } catch (\Exception $outerException) {
                // Handle the exception from the outer loop (log, report, etc.)
                Log::error('Error in outer loop: ' . $outerException->getMessage());

            }
        }
    }
}
