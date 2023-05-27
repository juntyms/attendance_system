<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Device;
use App\Models\Status;
use TADPHP\TADFactory;
use App\Models\Student;
use App\Models\Building;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Nationality;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::orderBy('id','DESC')->get();

        return view('student.index',compact('students'));
    }
    public function create()
    {
        $depts = Department::pluck('name', 'id');
        $buildings= Building::pluck('name','id');
        $nationalities = Nationality::pluck('name','id');
        $status = Status::pluck('name','id');

        return view('student.create',compact('depts','buildings','nationalities','status'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id'=>'required',
            'student_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile_no'=>'required',
            'nationality_id' => 'required',
            'status_id' => 'required',
            'department_id'=>'required',
            'building_id' => 'required',
            'room_no'=> 'required',
            'civilno' => 'required',
            'date_of_joining' => 'required',
            'emergency_contact_person'=>'required',
            'emergency_no' => 'required'
        ]);

        Student::create($validated);
        toast('Student Created Successfully!','success');

        return redirect()->route('student.list');
    }

    public function push(Student $student)
    {
        //find master device
        $device = Device::where('is_master',1)->first();

        if ($device) {

            $tad_factory = new TADFactory(['ip'=>$device->ip]);

            $tad = $tad_factory->get_instance();

            if ($tad->is_alive())
            {
                $template1_data = [
                    'pin' => $student->student_id,
                    'name' => $student->student_name,
                    ];

                $tad->set_user_info( $template1_data );

                $student->update(['is_pushed'=>1]);

                toast('Student pushed to master device!','success');
            } else {
                toast('Device Not Found or No Active Master Device','error');
            }

        } else {
            toast('No Master Device Found, Please Set Master Device','error');
        }

        return redirect()->route('student.list');
    }

    public function allattendance()
    {

       $attendance=Attendance::get();


       return view('attendance.all', compact('attendance'));
    }

    public function updateattendance()
    {

        $last=Attendance::max('uid');


            try
            {
                $zk = new ZKTeco(env('device_ip'));
                $last=Attendance::max('uid');

                if ($zk->connect())
                {

                    $attendances = $zk->getAttendance();

                    //dd($attendances);
                    foreach($attendances as $attendance)
                    {
                        if($attendance['uid'] > $last)
                        {
                            Attendance::create([
                                'uid'=>$attendance['uid'],
                                'student_id'=>$attendance['id'],
                                'state_id'=>$attendance['state'],
                                'punchtime'=>$attendance['timestamp'],
                                'type'=>$attendance['type']
                            ]);
                        }
                    }
                }
            }
            catch(Exception $e){
                return redirect()->route('attendance.all');


            }

            return redirect()->route('attendance.all');


    }

    public function edit($id)
    {
        $depts = Department::pluck('name', 'id');
        $buildings= Building::pluck('name','id');
        $nationalities = Nationality::pluck('name','id');
        $status = Status::pluck('name','id');

        $student = Student::findOrFail($id);

        return view('student.edit', compact('student','depts','buildings','nationalities','status'));
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update($request->all());

        toast('User Updated Successfully!','success');

        return redirect()->route('student.list');
    }

    public function buildings()
    {
        $buildings = Building::get();

        return view('student.buildings')->with('buildings',$buildings);

    }


}