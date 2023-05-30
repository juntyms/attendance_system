@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                {{ Form::open(['route'=>'studentleave.store']) }}
                <div class="form-group">
                    <label for="student">Student Name</label>
                    {{ Form::select('student_id', $students, null, ['class'=>'form-control','placeholder'=>'Select Student'])}}
                </div>
                <div class="form-group">
                    <label for="leave_date">Leave Date</label>
                    {{ Form::date('leave_date',null, ['class'=>'form-control']) }}
                </div>
                <button class="btn btn-success"> Save</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection