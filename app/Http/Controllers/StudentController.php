<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\StudentRequest;
use App\Imports\RoomAssignmentImport;
use App\Imports\StudentImport;
use App\Models\Attendance;
use App\Models\Building;
use App\Models\Department;
use App\Models\Device;
use App\Models\Nationality;
use App\Models\Room;
use App\Models\Status;
use App\Models\Student;
use App\Models\StudentRoom;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Rats\Zkteco\Lib\ZKTeco;
use TADPHP\TADFactory;
use App\Models\Fingerprint;


class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = [];

        //if (Auth::user()->coordinator) {
        if (Auth::user()->hasRole('Coordinator')) {
            $is_building = \DB::table('coordinators')->where('user_id', Auth::user()->id)->first();

            if ($is_building) {

                $students = DB::table('students')
                    ->leftjoin('buildings', 'buildings.id', '=', 'students.building_id')
                    ->leftjoin('student_rooms', 'student_rooms.student_id', '=', 'students.id')
                    ->leftjoin('rooms', 'rooms.id', '=', 'students.room_id')
                    ->select(
                        'students.id',
                        'students.student_id',
                        'students.student_name',
                        'students.student_name_ar',
                        'students.email',
                        'students.emergency_no',
                        'students.emergency2_no',
                        'students.emergency3_no',
                        'students.mobile_no',
                        'students.is_pushed',
                        'buildings.name as buildingname',
                        'rooms.name as roomname',
                        'students.room_id as studentroomid',
                        'students.status_id'
                    )
                    ->where('students.building_id', $is_building->building_id)
                    ->orderBy('students.id', 'DESC')
                    ->get();
            }
        } else {
            //if (Auth::user()->roles[0]->id === self::admin) {
            if (Auth::user()->hasRole('super-admin')) {
                $students = DB::table('students')
                    ->leftjoin('buildings', 'buildings.id', '=', 'students.building_id')
                    ->leftjoin('student_rooms', 'student_rooms.student_id', '=', 'students.id')
                    ->leftjoin('rooms', 'rooms.id', '=', 'students.room_id')
                    ->select(
                        'students.id',
                        'students.student_id',
                        'students.student_name',
                        'students.student_name_ar',
                        'students.email',
                        'students.emergency_no',
                        'students.emergency2_no',
                        'students.emergency3_no',
                        'students.mobile_no',
                        'students.is_pushed',
                        'buildings.name as buildingname',
                        'rooms.name as roomname',
                        'students.room_id as studentroomid',
                        'students.status_id'
                    )
                    ->orderBy('students.id', 'DESC')
                    ->get();
            }
        }

        return view('student.index', compact('students'));
    }

    public function roomassignment()
    {
        return view('student.roomassignment');
    }

    public function saveroomassignment(Request $request)
    {
        // Check room capacity
        $room = Room::findOrFail($request->room_id);

        if ($room) {
            //Save Student
            StudentRoom::create($request->all());

            $student = Student::findOrFail($request->student_id);

            $student->update(['building_id' => $room->building_id]);

            Alert::success('Room Assignment', 'Student Assigned');
        }


        return redirect()->route('student.list');
    }

    public function deleteroomassignment($id)
    {
        $student_room = StudentRoom::findOrFail($id);

        $student = Student::findOrFail($student_room->student_id);

        $student->update(['building_id' => null]);

        StudentRoom::destroy($id);

        Alert::error('Deleted', 'Room Assignment');

        return redirect()->route('student.list');
    }

    public function create()
    {
        $depts = Department::pluck('name', 'id');
        $buildings = Building::pluck('name', 'id');
        $nationalities = Nationality::pluck('name', 'id');
        $status = Status::pluck('name', 'id');
        $rooms = Room::pluck('name', 'id');

        return view('student.create', compact('depts', 'buildings', 'nationalities', 'status', 'rooms'));
    }
    public function store(StudentRequest $request)
    {
        $student = Student::where('student_id', $request->student_id)->first();

        if (empty($student)) {

            $student = Student::create($request->all());

            toast('Student Created Successfully!', 'success');
        } else {
            toast('Student Already Exist!', 'error');
        }

        //return redirect()->route('student.list');
        return redirect()->route('student.edit', $student->id);
    }

    public function push($id)
    {
        $student = Student::findOrFail($id);

        $device = Device::where('is_master', 1)->first();

        if ($device) {

            $tad_factory = new TADFactory(['ip' => $device->ip]);

            $tad = $tad_factory->get_instance();

            if ($tad->is_alive()) {
                $template1_data = [
                    'pin' => $student->student_id,
                    'name' => $student->student_name,
                ];

                $tad->set_user_info($template1_data);

                $student->update(['is_pushed' => 1]);

                toast('Student pushed to master device!', 'success');
            } else {
                toast('Device Not Found or No Active Master Device', 'error');
            }
        } else {
            toast('No Master Device Found, Please Set Master Device', 'error');
        }

        return redirect()->route('student.list');
    }

    public function deletefromdevice($userid)
    {

        $student = Student::findOrFail($userid);

        $device = Device::where('is_master', 1)->first();

        if ($device) {

            $tad_factory = new TADFactory(['ip' => $device->ip]);

            $tad = $tad_factory->get_instance();

            if ($tad->is_alive()) {

                $tad->delete_user(['pin' => $student->student_id]);

                $student->update(['is_pushed' => 0]);

                toast('Student removed from master device!', 'success');
            } else {
                toast('Device Not Found or No Active Master Device', 'error');
            }
        } else {
            toast('No Master Device Found, Please Set Master Device', 'error');
        }

        return redirect()->route('student.list');
    }

    public function allattendance()
    {

        $attendance = Attendance::get();

        return view('attendance.all', compact('attendance'));
    }

    public function updateattendance()
    {

        $last = Attendance::max('uid');

        try {
            $zk = new ZKTeco(env('device_ip'));
            $last = Attendance::max('uid');

            if ($zk->connect()) {

                $attendances = $zk->getAttendance();

                //dd($attendances);
                foreach ($attendances as $attendance) {
                    if ($attendance['uid'] > $last) {
                        Attendance::create([
                            'uid' => $attendance['uid'],
                            'student_id' => $attendance['id'],
                            'state_id' => $attendance['state'],
                            'punchtime' => $attendance['timestamp'],
                            'type' => $attendance['type']
                        ]);
                    }
                }
            }
        } catch (Exception $e) {
            return redirect()->route('attendance.all');
        }

        return redirect()->route('attendance.all');
    }

    public function edit($id)
    {
        $depts = Department::pluck('name', 'id');
        $buildings = Building::pluck('name', 'id');
        $nationalities = Nationality::pluck('name', 'id');
        $status = Status::pluck('name', 'id');

        $student = Student::findOrFail($id);

        $rooms = Room::pluck('name', 'id');

        return view('student.edit', compact('student', 'depts', 'buildings', 'nationalities', 'status', 'rooms'));
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update($request->all());

        toast('User Updated Successfully!', 'success');

        return redirect()->route('student.list');
    }

    public function upload()
    {
        return view('student.upload');
    }

    public function saveupload(Request $request)
    {
        Excel::import(new StudentImport(), $request->excelfile);

        toast('File Uploaded Successfully!', 'success');

        return redirect()->route('student.list');
    }

    public function uploadroomassignment()
    {
        return view('student.uploadroomassignment');
    }

    public function saveuploadroomassignment(Request $request)
    {
        Excel::import(new RoomAssignmentImport(), $request->excelfile);

        toast('File Uploaded Successfully!', 'success');

        return redirect()->route('student.list');
    }

    public function push_student_to_device(Student $student)
    {
        $devices = Device::where('is_master', '0')->pluck('name', 'id');

        return view('student.pushtodevice')
            ->with('devices', $devices)
            ->with('student_id', $student->id);
    }

    public function post_push_student_to_device(Request $request, Student $student)
    {

        $fingerprint = Fingerprint::where('student_id', $student->student_id)->first();

        if ($fingerprint) {

            try {

                $device = Device::findOrFail($request->device_id);

                $tad_factory = new TADFactory(['ip' => $device->ip]);

                $tad = $tad_factory->get_instance();

                $tad->delete_user(['pin' => $student->student_id]);

                $user_template_data = [
                    'pin' => $fingerprint->student_id,
                    'name' => $student->student_name,
                    'finger_id' => $fingerprint->fingerid, // First fingerprint has 0 as index.
                    'size' => $fingerprint->size,    // Be careful, this is not string length of $template1_vx9 var.
                    'valid' => $fingerprint->valid,
                    'template' => $fingerprint->template
                ];

                $tad->set_user_template($user_template_data);

                toast('Student pushed to building record', 'success');

                return redirect()->route('student.list');
            } catch (Throwable $e) {

                report($e);
            }
        } else {

            toast('Student not yet have fingerprint record, make sure you have push and registered', 'error');

            return redirect()->route('student.list');
        }
    }

    public function generatelocation()
    {

        $students = Student::all();

        foreach ($students as $student) {

            $attendance = Attendance::where('student_id', $student->student_id)->latest()->first();

            if ($attendance) {

                if (optional($attendance->device)->building_id) {
                    $student->update(['building_id' => $attendance->device->building_id]);
                }
            }
        }

        return redirect()->route('student.list');
    }

    public function enactive()
    {
        \DB::table('students')->update(['status_id' => 2]);

        toast('All Students Deactivated', 'success');

        return redirect()->route('student.list');
    }
}
