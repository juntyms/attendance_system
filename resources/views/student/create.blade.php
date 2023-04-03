@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    {!! Form::open(array('route' => 'student.store','method'=>'POST')) !!}
    @if (count($errors) > 0)
    <div class=" alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="{{ URL::asset('assets/img/profile.jpg') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">

                    <div class="d-flex justify-content-center mb-2">

                        <button type="button" class="btn btn-outline-primary ms-1 mt-2">Upload Photo</button>
                    </div>
                </div>
            </div>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">

                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Student ID</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"> {!! Form::text('student_id', null, array('placeholder'
                                => 'User Name','class' => 'form-control
                                '))
                                !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{!! Form::text('student_name', null, array('placeholder'
                                => 'Name','class' => 'form-control '))
                                !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"> {!! Form::text('email', null, array('placeholder' =>
                                'Email','class' => 'form-control ')) !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Mobile</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"> {!! Form::text('mobile_no', null, array('placeholder' =>
                                'User Name','class' => 'form-control'))!!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Department</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{!! Form::select('department_id', $depts,null,
                                array('class' =>
                                'form-control ','placeholder'=>'Please select Department ...')) !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Building</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"> {!! Form::select('building_id', $buildings,null,
                                array('class' =>
                                'form-control ','placeholder'=>'Please select Department ...')) !!}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Room Number:</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{!! Form::text('room_no', null, array('placeholder' =>
                                'Room Number','class' => 'form-control')) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-4"><span class="text-primary font-italic me-1">Addtional</span>
                                information

                            </p>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Nationality</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">Omani</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Civil ID</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">0000000</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Date of Joining</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">5-1-2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Student Status</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">Active</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-4"><span class="text-primary font-italic me-1">On</span> Emergency
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Emergency Contact Person</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">Person Name</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0">Emergency Contact Number</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">9999999999</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <center>
            <button type="submit" class="btn btn-outline-success ms-1 mt-4">Add Student</button>
        </center>
    </div>
    {!! Form::close() !!}

</div>
@endsection