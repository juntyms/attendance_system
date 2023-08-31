<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentLeave;
use Illuminate\Http\Request;
use Auth;

class StudentLeaveController extends Controller
{
    //const coordinator = 1;
    public const admin = 2;

    public function index()
    {
        $studentleaves = [];

        //if (Auth::user()->roles[0]->id == Self::coordinator) {
        if (Auth::user()->coordinator) {

            $studentleaves =  StudentLeave::whereRelation('building', 'building_id', Auth::user()->coordinator->building_id)->get();

        } else {
            // check if admin
            if (Auth::user()->roles[0]->id == self::admin) {

                $studentleaves = StudentLeave::all();
            }
        }

        return view('studentleave.index')
                ->with('studentleaves', $studentleaves);
    }

    public function create()
    {
        $students = Student::where('status_id', 1)
            ->Select(\DB::RAW("CONCAT(students.student_name,' - ', students.email) as fullname"), 'students.id')
            ->pluck('fullname', 'id');

        return view('studentleave.create')->with('students', $students);
    }

    public function store(Request $request)
    {
        StudentLeave::create($request->all());

        toast('Student Leave Successfully Added!', 'success');

        return redirect()->route('studentleave.index');
    }

    public function return($id)
    {
        $studentleave = StudentLeave::findOrFail($id);

        $students = Student::where('status_id', 1)->pluck('student_name', 'id');

        return view('studentleave.return')
            ->with('studentleave', $studentleave)
            ->with('students', $students);
    }

    public function storereturn(Request $request, $id)
    {
        $studentleave = StudentLeave::findOrFail($id);

        $studentleave->update($request->all());

        toast('Student Return Added!', 'success');

        return redirect()->route('studentleave.index');
    }
}
