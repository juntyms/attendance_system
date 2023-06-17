<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentLeave;
use Illuminate\Http\Request;
use Auth;

class StudentLeaveController extends Controller
{
    //const coordinator = 1;
    const admin = 2;

    public function index()
    {
        $studentleaves = [];
        //dd(Auth::user()->coordinator);

        //if (Auth::user()->roles[0]->id == Self::coordinator) {
        if (Auth::user()->coordinator) {
/*
            $studentleaves = StudentLeave::with(['student' => function(Builder $query) {
                $query->where('building_id','=', Auth::user()->coordinator->building_id);
            }])->get();
*/
            $studentleaves = StudentLeave::whereRelation('student','building_id',Auth::user()->coordinator->building_id)->get();


        } else {
            // check if admin
            if (Auth::user()->roles[0]->id == Self::admin) {

                $studentleaves = StudentLeave::all();
            }


        }
//dd($studentleaves);

        return view('studentleave.index')
                ->with('studentleaves',$studentleaves);
    }

    public function create()
    {
        $students = Student::where('status_id',1)->pluck('student_name','id');

        return view('studentleave.create')->with('students',$students);
    }

    public function store(Request $request)
    {
        StudentLeave::create($request->all());

        toast('Student Leave Successfully Added!','success');

        return redirect()->route('studentleave.index');
    }

    public function return($id)
    {
        $studentleave = StudentLeave::findOrFail($id);

        $students = Student::where('status_id',1)->pluck('student_name','id');

        return view('studentleave.return')
            ->with('studentleave',$studentleave)
            ->with('students',$students);
    }

    public function storereturn(Request $request, $id)
    {
        $studentleave = StudentLeave::findOrFail($id);

        $studentleave->update($request->all());

        toast('Student Return Added!','success');

        return redirect()->route('studentleave.index');
    }
}