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
        <div class="card mb-2">
            <div class="card-body text-center">
                <img src="{{ URL::asset('assets/img/profile.jpg') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">

                <div class="d-flex justify-content-center mb-2">
                    <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body">
                <p class="mb-2"><span class="text-primary">Addtional information</span></p>
                <hr>

                <div class="row">
                    <label for="studentId" class="col-sm-4 col-form-label">Civil ID</label>
                    <div class="col-sm-8">
                        {{ Form::text('civilno',null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="nationality" class="col-sm-4 col-form-label">Nationality</label>
                    <div class="col-sm-8">
                        {{ Form::select('nationality_id',$nationalities,null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="row">
                    <label for="joiningDate" class="col-sm-4 col-form-label">Joining Date</label>
                    <div class="col-sm-8">
                        {{ Form::date('date_of_joining',null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="status" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                        {{ Form::select('status_id',$status,null, ['class'=>'form-control']) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card mb-1">
            <div class="card-body">
                <div class="row mt-2">
                    <label for="studentId" class="col-sm-3 col-form-label">Student ID</label>
                    <div class="col-sm-9">
                        {{ Form::text('student_id', null, ['placeholder'=> 'User Name','class' => 'form-control']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="fullName" class="col-sm-3 col-form-label">Fullname</label>
                    <div class="col-sm-9">
                        {{ Form::text('student_name', null, ['placeholder'=> 'Name','class' => 'form-control '])}}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        {{ Form::text('email', null, ['placeholder' =>'Email','class' => 'form-control ']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="mobile" class="col-sm-3 col-form-label">Mobile</label>
                    <div class="col-sm-9">
                        {{ Form::text('mobile_no', null, ['placeholder' =>'User Name','class' => 'form-control']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="department" class="col-sm-3 col-form-label">Department</label>
                    <div class="col-sm-9">
                        {{ Form::select('department_id', $depts,null,['class' =>'form-control ','placeholder'=>'Please select Department ...']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="building" class="col-sm-3 col-form-label">Building</label>
                    <div class="col-sm-9">
                        {{ Form::select('building_id', $buildings,null,['class' =>'form-control ','placeholder'=>'Please select Department ...']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="roomNo" class="col-sm-3 col-form-label">Room No</label>
                    <div class="col-sm-9">
                        {{ Form::text('room_no', null, ['placeholder' =>'Room Number','class' => 'form-control']) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <span class="text-primary">On Emergency </span>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <label for="emergencyContactPerson" class="col-sm-6 col-form-label">Emergency Contact Person</label>
                            <div class="col-sm-6">
                                {{ Form::text('emergency_contact_person',null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <label for="emergencyContactNo" class="col-sm-6 col-form-label">Emergency No</label>
                            <div class="col-sm-6">
                                {{ Form::text('emergency_no',null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-1">
            <div class="card-body">
                <p class="text-right">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                        {{ $buttonText }}
                    </button>
                </p>
            </div>
        </div>

    </div>
</div>