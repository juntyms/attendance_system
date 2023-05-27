<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Device;
use TADPHP\TADFactory;
use App\Models\Student;
use App\Models\Fingerprint;
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
        //$tad_factory = new TADFactory(['ip'=>'192.168.100.22']);
        //$tad = $tad_factory->get_instance();

        //$log = $tad->get_user_info(['pin'=>20222023])->to_array(); // Get userinfo
        //$log = $tad->get_user_template(['pin'=>'201501866'])->to_array();
        //dd($log);


        //Get The Master Device
        $device = Device::where('is_master',1)->first();

        if ($device) {
            $tad_factory = new TADFactory(['ip'=>$device->ip]);
            $tad = $tad_factory->get_instance();

            //Get the Students List
            $students = Student::where('status_id',1)->get();

            //Loop through the students table
            foreach($students as $student) {
                // Fetch Student from device
                $student_from_device = $tad->get_user_template(['pin'=>$student->student_id])->to_array();
                //Check if Recourd exist on device
                if (!empty($student_from_device)) {
                    // Query Student from the fingerprints table
                    //dd($student_from_device["Row"]["FingerID"]);
                    $student_fp = Fingerprint::where('student_id',$student->student_id)
                                        ->where('fingerid',$student_from_device["Row"]["FingerID"])
                                        ->first();

                    // Check if Student exists on the table
                    if ($student_fp) {
                        // Update Record
                        $student_fp->update(['fingerid'=>$student_from_device["Row"]["Template"]]);
                    } else {
                        // Create new entry
                        Fingerprint::create([
                            'student_id' => $student->student_id,
                            'fingerid' => $student_from_device["Row"]["FingerID"],
                            'size' => $student_from_device["Row"]["Size"],
                            'valid'=> $student_from_device["Row"]["Valid"],
                            'template'=> $student_from_device["Row"]["Template"]
                        ]);
                    }
                }
            }
        }

    }
}
