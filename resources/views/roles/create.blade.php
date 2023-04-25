@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5>Add Roles</h5>
                {{ Form::open(['route'=>'roles.store']) }}
                <div class="form-group">
                    <label for="rolename">Role</label>
                    {{ Form::text('name',null, ['class'=>'form-control'])}}
                </div>
                <button class="btn btn-primary"> Save</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection