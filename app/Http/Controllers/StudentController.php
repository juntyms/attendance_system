<?php

namespace App\Http\Controllers;

use Exception;
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

    public function pushstudent(Student $student)
    {
        $tad_factory = new TADFactory(['ip'=>env('device_ip')]);

        $tad = $tad_factory->get_instance();
        $template1_vx9="";

        /* $template1_data = [
            'pin' => $student->student_id,
            'finger_id' => 0, // First fingerprint has 0 as index.
            'name' => $student->student_name,
            'size' => 760,    // Be careful, this is not string length of $template1_vx9 var.
            'valid' => 1,
            'template' => $template1_vx9
          ];
           */
        $template1_data = [
        'pin' => $student->student_id,
        'name' => $student->student_name,
        ];

        //$tad->set_user_template( $template1_data );
        $tad->set_user_info( $template1_data );
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

    public function inout()
    {

    }

}
