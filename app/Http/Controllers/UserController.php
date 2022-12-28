<?php

namespace App\Http\Controllers;

use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $zk = new ZKTeco('10.153.82.110');

            if ($zk->connect()){
                $user = $zk->getFingerprint(1); 

                dd($user);
            }
    }
}
