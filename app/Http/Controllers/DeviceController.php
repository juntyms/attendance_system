<?php

namespace App\Http\Controllers;

use App\Models\Device;
use TADPHP\TADFactory;
use App\Models\Attendance;
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
        $is_master = 0;

        if ($request->has('is_master')) {
            $is_master = 1;
        }

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
                'is_master' => $is_master,
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
        $device = Device::findOrFail($id);

        return view('devices.edit')->with('device',$device);
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

    public function delete($device)
    {
        Device::destroy($device);

        return redirect()->route('devices.index');
    }

    public function fetch($id)
    {
        //$last_student_record=Attendance::max('uid');
        $device = Device::findOrFail($id);

        try
        {
            $zk = new ZKTeco($device->ip);

            //$last_student_record=Attendance::max('uid');

            if ($zk->connect())
            {

                $attendances = $zk->getAttendance();

                //dd($attendances);
                foreach($attendances as $attendance)
                {
                    $db_attendance = Attendance::where('uid',$attendance['uid'])->where('device_id',$device->id)->first();

                    if ($db_attendance) { //Record Already Found Update Record
                        $db_attendance->update(
                            [
                                'uid'=>$attendance['uid'],
                                'student_id'=>$attendance['id'],
                                'state_id'=>$attendance['state'],
                                'punchtime'=>$attendance['timestamp'],
                                'type'=>$attendance['type'],
                                'device_id'=>$device->id
                            ]
                        );
                    } else { // No Record Found add Record
                        Attendance::create(
                            [
                                'uid'=>$attendance['uid'],
                                'student_id'=>$attendance['id'],
                                'state_id'=>$attendance['state'],
                                'punchtime'=>$attendance['timestamp'],
                                'type'=>$attendance['type'],
                                'device_id'=>$device->id
                            ]
                        );
                    }


                }
            }
        }
        catch(Exception $e){
            toast('Unable to Connect to Device','error');
            return redirect()->route('devices.index');

        }
        toast('Attendance Downloaded Successfully!','success');
        return redirect()->route('devices.index');
    }
}