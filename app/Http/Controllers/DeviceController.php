<?php

namespace App\Http\Controllers;

use App\Models\Device;
use TADPHP\TADFactory;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * ! Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::get();

        return view('devices.index')->with('devices',$devices);
    }

    /**
     * ! Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('devices.create');
    }

    /**
     * ! Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //* Connect to device and get record
        $zk = new ZKTeco($request->ip);

        if ($zk->connect()){

            $dev = [
                'ip' => $request->ip,
                'name' => $request->name,
                'device_version' => $zk->version(),
                'os_version' => $zk->osVersion(),
                'fmversion' => $zk->fmVersion(),
                'serialnumber' => $zk->serialNumber(),
                'status' => 'Active'
            ];

            Device::create($dev);
        } else {
            toast('Unable to Connect to Device','error');
        }


        return redirect()->route('devices.index');
    }

    /**
     * ! Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * ! Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * ! Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * ! Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function resetdevice()
    {
/*
        $zk = new ZKTeco('192.168.1.201');
        $zk->clearAdmin();
*/

        $tad_factory = new TADFactory(['ip'=>'192.168.6.209']);

        $tad = $tad_factory->get_instance();
        echo '<pre>';
        var_dump($tad->get_all_user_info());
        echo '<pre>';
        echo "<hr />";

        //Delete template
        //$tad->delete_template(['pin'=>1]);

        // Getting attendance logs from all users.
//        $logs = $tad->get_user_template()->to_array();

//        dd($logs);

        //$tad = (new TADFactory(['ip'=>'192.168.1.201']))->get_instance();

        //dd($tad);
        //$tad->delete_admin();

    }
}
