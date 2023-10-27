@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4>Students Details</h4>
                <hr />
                {{ Form::open(['route'=>['student.postpushtodevice', $student_id]]) }}
                <div class="form-group">
                    <label for="device">Devices</label>
                    {{ Form::select('device_id',$devices, null, ['class'=>'form-control','placeholder'=>'Select Device']) }}
                </div>
                <div class="form-group">
                    <button class="btn btn-warning text-white"> Push Now</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
