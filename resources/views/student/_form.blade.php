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


            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body">
                <p class="mb-2"><span class="text-primary">Addtional Emergency Contact</span></p>
                <hr>

                <div class="row">
                    <label for="emergency2">Emergency No</label>
                    {{ Form::text('emergency2_no',null,['class'=>'form-control'] ) }}
                </div>
                <div class="row">
                    <label for="emergency3">Emergency No</label>
                    {{ Form::text('emergency3_no',null,['class'=>'form-control'] ) }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card mb-1">
            <div class="card-body">
                <div class="row mt-2">
                    <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
                    <div class="col-sm-10">
                        {{ Form::text('student_id', null, ['placeholder'=> 'Student ID No','class' => 'form-control']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="fullName" class="col-sm-2 col-form-label">Fullname (EN)</label>
                    <div class="col-sm-10">
                        {{ Form::text('student_name', null, ['placeholder'=> 'Student Name English','class' => 'form-control '])}}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="fullName" class="col-sm-2 col-form-label">Fullname (AR)</label>
                    <div class="col-sm-10">
                        {{ Form::text('student_name_ar', null, ['placeholder'=> 'Student Name Arabic','class' => 'form-control '])}}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        {{ Form::text('email', null, ['placeholder' =>'Email Address','class' => 'form-control ']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                    <div class="col-sm-10">
                        {{ Form::text('mobile_no', null, ['placeholder' =>'Mobile No','class' => 'form-control']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="civilId" class="col-sm-2 col-form-label">Civil ID</label>
                    <div class="col-sm-10">
                        {{ Form::text('civilno',null, ['class'=>'form-control','placeholder'=>'Civil No']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
                    <div class="col-sm-3">
                        {{ Form::select('nationality_id',$nationalities,null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="row">
                    <label for="joiningDate" class="col-sm-2 col-form-label">Joining Date</label>
                    <div class="col-sm-3">
                        {{ Form::date('date_of_joining',null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-3">
                        {{ Form::select('status_id',$status,null, ['class'=>'form-control']) }}
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