<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return view('profile.show')->with('user', $user);
    }

    public function update(Request $request)
    {

        $user = User::findOrFail(Auth::user()->id);

        if ($request->filled('password')) {
            $request['password'] = bcrypt($request->password);
        } else {
            $request['password'] = $user->password;
        }

        $user->update($request->all());

        toast('Profile Updated!', 'success');

        return redirect()->route('profile.show');
    }
}
