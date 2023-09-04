@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="text-success">Upload Students From Excel File with the following headers</h4>
            <hr />
            <blockquote class="blockquote blockquote-primary">
                <small>
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tr class="bg-success text-white">
                                <th>student id</th>
                                <th>room</th>
                            </tr>
                            <tr>
                                <td>202300000</td>
                                <td>B1A00000</td>
                            </tr>
                        </table>
                    </div>
                </small>
            </blockquote>
            {{ Form::open(['route'=>'student.saveuploadroomassignment','files'=>'true']) }}
            <div class="form-group">
                {{ Form::file('excelfile') }}
            </div>
            <button class="btn btn-primary"><i class="icon-upload"></i> Upload</button>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection