@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="text-success"> Upload Students From Excel File </h4>
            <hr />
            <blockquote class="blockquote blockquote-primary">
                <small>
                    <table class="table table-bordered">
                        <tr class="bg-success">
                            <th class="text-white">student id</th>
                            <th class="text-white">student name</th>
                            <th class="text-white">student name ar</th>
                            <th class="text-white">mobileno</th>
                            <th class="text-white">status</th>
                            <th class="text-white">civilno</th>
                            <th class="text-white">building</th>
                            <th class="text-white">date of joining</th>
                            <th class="text-white">emergency contact person</th>
                            <th class="text-white">emergency no</th>
                            <th class="text-white">emergency2 no</th>
                            <th class="text-white">emergency3 no</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </small>
                <footer class="blockquote-footer"> Excel file must have <strong>EXACTLY</strong> the following headers</footer>
            </blockquote>

            {!! Form::open(['route' => 'students.saveupload','files'=>'true']) !!}
            <div class="form-group">
                {{ Form::file('excelfile') }}
            </div>
            <button class="btn btn-primary"> <i class="icon-upload"></i> Upload</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection