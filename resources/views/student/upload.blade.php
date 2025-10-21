@extends('layouts.content')

@section('main')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="text-success"> Upload Students From Excel File </h4>
                <hr />


                {!! Form::open(['route' => 'students.saveupload', 'files' => 'true']) !!}
                <div class="form-group">
                    {{ Form::file('excelfile') }}
                </div>
                <button class="btn btn-primary"> <i class="icon-upload"></i> Upload</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
