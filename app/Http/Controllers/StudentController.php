<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use Exception;
use App\Models\Room;
use App\Models\Device;
use App\Models\Status;
use TADPHP\TADFactory;
use App\Models\Student;
use App\Models\Building;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Nationality;
use App\Models\StudentRoom;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    const admin = 2;

    public function index(Request $request)
    {
        $students = [];

        if (Auth::user()->coordinator) {

            $is_building = \DB::table('coordinators')->where('user_id',Auth::user()->id)->first();

            if($is_building) {
                $building_rooms = \DB::table('rooms')->select('id')->where('building_id',$is_building->id)->pluck('id');

                $students = DB::table('student_rooms')
                                ->join('rooms','rooms.id','=','student_rooms.room_id')
                                ->join('buildings','buildings.id','=','rooms.building_id')
                                ->join('students','students.id','=','student_rooms.student_id')
                                ->whereIn('rooms.id',$building_rooms)
                                ->select('students.id','students.student_id','students.student_name','students.email',
                                    'students.mobile_no','students.is_pushed',
                                    'buildings.name as buildingname','rooms.name as roomname','student_rooms.id as studentroomid')
                                ->orderBy('students.id','DESC')
                                ->get();
            }


        } else {
            if (Auth::user()->roles[0]->id == Self::admin) {
/*
                $students = DB::table('student_rooms')
                                ->join('rooms','rooms.id','=','student_rooms.room_id')
                                ->join('buildings','buildings.id','=','rooms.building_id')
                                ->join('students','students.id','=','student_rooms.student_id')
                                ->select('students.id','students.student_id','students.student_name','students.email',
                                    'students.mobile_no','students.is_pushed',
                                    'buildings.name as buildingname','rooms.name as roomname','student_rooms.id as studentroomid')
                                ->orderBy('students.id','DESC')
                                ->get();
*/
                $students = DB::table('students')
                            ->leftjoin('buildings','buildings.id','=','students.building_id')
                            ->leftjoin('student_rooms','student_rooms.student_id','=','students.id')
                            ->leftjoin('rooms','rooms.id','=','student_rooms.room_id')
                            ->select('students.id','students.student_id','students.student_name','students.email',
                                    'students.mobile_no','students.is_pushed',
                                    'buildings.name as buildingname','rooms.name as roomname','student_rooms.id as studentroomid')
                            ->orderBy('students.id','DESC')
                            ->get();


            }
        }


        return view('student.index',compact('students'));
    }

    public function roomassignment()
    {
        return view('student.roomassignment');
    }

    public function saveroomassignment(Request $request)
    {
        // Check room capacity
        $room = Room::findOrFail($request->room_id);

        $room_occupancy = StudentRoom::where('room_id',$request->room_id)->count();

        if($room->capacity > $room_occupancy) {
            //Save Student
            StudentRoom::create($request->all());

            $student = Student::findOrFail($request->student_id);

            $student->update(['building_id'=> $room->building_id]);

            Alert::success('Room Assignment','Student Assigned');
        } else {
            Alert::error('Error','Room Capacity Full');
        }


        return redirect()->route('student.list');
    }

    public function deleteroomassignment($id)
    {
        $student_room = StudentRoom::findOrFail($id);

        $student = Student::findOrFail($student_room->student_id);

        $student->update(['building_id'=> NULL]);

        StudentRoom::destroy($id);

        Alert::error('Deleted','Room Assignment');

        return redirect()->route('student.list');
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
            'civilno' => 'required',
            'date_of_joining' => 'required',
            'emergency_contact_person'=>'required',
            'emergency_no' => 'required'
        ]);

        Student::create($validated);
        toast('Student Created Successfully!','success');

        return redirect()->route('student.list');
    }

    public function push($id)
    {
        $student = Student::findOrFail($id);

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




}