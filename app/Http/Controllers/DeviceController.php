<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::get();

        return view('device.index')
            ->with('devices',$devices);
    }

    public function add()
    {
        return view('device.add');
    }

    public function save()
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
}
