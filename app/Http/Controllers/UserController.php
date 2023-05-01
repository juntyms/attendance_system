<?php

namespace App\Http\Controllers;

use App\Models\User;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Spatie\Permission\Models\Role;

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

    public function addrole($userId)
    {
        $user = User::findOrFail($userId);

        $roles = Role::pluck('name','id');

        return view('users.addrole')
            ->with('user',$user)
            ->with('roles',$roles);
    }

    public function saverole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        $role = Role::findOrFail($request->role);

        $user->assignRole($role->name);

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
