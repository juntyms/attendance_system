<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;

class FingerprintController extends Controller
{
    public function connect()
    {
        $zk = new ZKTeco('10.153.82.110');

            if ($zk->connect()){

            $attendances = $zk->getAttendance();
            
                //dd($attendances);
                foreach($attendances as $attendance) {
                    Attendance::create([
                        'uid'=>$attendance['uid'],
                        'user_id'=>$attendance['id'],
                        'state_id'=>$attendance['state'],
                        'punchtime'=>$attendance['timestamp'],
                        'type'=>$attendance['type']
                    ]);
                }
            }
    }
}
