@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                {{ Form::model($studentleave,['route'=>['studentleave.storereturn',$studentleave->id]]) }}
                <div class="form-group">
                    <label for="student">Student Name</label>
                    <label for="studentname" class="form-control">{{ $studentleave->student->student_name }}</label>
                </div>
                <div class="form-group">
                    <label for="return_date">Return Date</label>
                    {{ Form::date('return_date', Now(), ['class'=>'form-control']) }}
                </div>
                <button class="btn btn-success"> Student Return</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection