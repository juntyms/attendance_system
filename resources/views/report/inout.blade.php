@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4>Student Attendance</h4>
            <hr />
            {{ Form::open(['route'=>['report.postinout']]) }}
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-2">
                        <label for="start_date">Start Date</label>
                        {{ Form::date('start_date',now(), ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-2">
                        <label for="end_date">End Date</label>
                        {{ Form::date('end_date', now(), ['class'=>'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="report_type">Report Type</label>
                    <select name="report_type" id="report_type" class="form-control">
                        <option value="1">Full Attendance</option>
                        <option value="2">Absences</option>
                        <option value="3">Late</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-check form-check-flat form-check-primary pr-2">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="ptype" value="1" checked>
                            View
                            <i class="input-helper"></i></label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary pr-2">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="ptype" value="2">
                            PDF
                            <i class="input-helper"></i></label>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="ptype" value="3">
                            Excel
                            <i class="input-helper"></i></label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary"> <i class="icon-watch"></i> Show Attendance</button>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection