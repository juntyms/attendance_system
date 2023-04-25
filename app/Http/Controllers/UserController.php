<?php

namespace App\Http\Controllers;

use App\Models\User;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $request['password'] = bcrypt($request->password);

        User::create($request->all());

        toast('User Created Successfully!','success');

        return redirect()->route('users.index');
    }

    public function revokeRole($userId, $role)
    {
        $user = User::findOrFail($userId);

        $user->removeRole($role);

        return redirect()->route('users.index');

    }

    public function getfingerprint()
    {
        $zk = new ZKTeco(env('device_ip'));

            if ($zk->connect()){
                $user = $zk->getFingerprint(1);

                dd($user);
            }
    }
}