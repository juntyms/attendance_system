@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3>Assign Role to {{ $user->name }}</h3>
                {{ Form::open(['route'=>['users.saverole',$user->id]]) }}
                <div class="form-group">
                    <label for="roles">Role</label>
                    {{ Form::select('role',$roles, null,['class'=>'form-control','placeholder'=>'Select Role . . . .']) }}
                </div>
                <button class="btn btn-primary"> Assign Role</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection