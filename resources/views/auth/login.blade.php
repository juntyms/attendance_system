@extends('layouts.base')

@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="auth-form-transparent text-left p-3">

                    <h4>Dhofar University - Attendance System</h4>
                    <h6 class="font-weight-light">Happy to see you again!</h6>

                    {{ Form::open(['route'=>'postlogin','class'=>'pt-3']) }}
                    <div class="form-group">
                        <label for="exampleInputEmail">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-account-outline text-primary"></i>
                                </span>
                            </div>
                            <input type="text" name="username" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-lock-outline text-primary"></i>
                                </span>
                            </div>
                            <input name="password" type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
                        </div>
                    </div>

                    <div class="my-3">
                        <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                    </div>


                    {{ Form::close() }}
                </div>
            </div>
            <div class="col-lg-6 login-half-bg d-flex flex-row">
                <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020 All rights reserved.</p>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
@endsection