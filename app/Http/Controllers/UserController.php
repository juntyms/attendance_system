<?php

namespace App\Http\Controllers;

use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $zk = new ZKTeco(env('device_ip'));

            if ($zk->connect()){
                $user = $zk->getFingerprint(1); 

                dd($user);
            }
    }
}
