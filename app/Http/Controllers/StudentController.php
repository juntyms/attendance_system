<?php

namespace App\Http\Controllers;

use TADPHP\TADFactory;
use App\Models\Student;
use App\Models\Building;
use App\Models\Department;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $data = Student::orderBy('id','DESC')->get();

        return view('student.index',compact('data'))
                                ->with('i', ($request->input('page', 1)-1) * 5);
    }
    public function create()
    {
        $depts = Department::pluck('name', 'id');
        $buildings= Building::pluck('name','id');
     
        return view('student.create',compact('depts','buildings'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'student_id'=>'required',
            'student_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile_no'=>'required',
            'department_id'=>'required',
            'building_id' => 'required',
            'room_no'=> 'required',
        ]);


       
        
        $input = $request->all();
        $student = Student::create($input);

       $tad_factory = new TADFactory(['ip'=>'10.153.82.157']);

        $tad = $tad_factory->get_instance();
        $template1_vx9="";

        $template1_data = [
            'pin' => $student->student_id,
            'finger_id' => 0, // First fingerprint has 0 as index.
            'size' => 760,    // Be careful, this is not string length of $template1_vx9 var.
            'valid' => 1,
            'template' => $template1_vx9
          ];
          
        $tad->set_user_template( $template1_data ); 

        return redirect()->route('student.list')->with('success','User created successfully');
    }


    public function allattendance()
    {

        return view('attendance.all');
    }
    
}