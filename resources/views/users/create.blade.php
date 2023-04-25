@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h5> Create Users </h5>
            <hr />
            {{ Form::open(['route'=>'users.store']) }}
            <div class="form-group">
                <label for="username">Username</label>
                {{ Form::text('username',null, ['class'=>'form-control']) }}
                @error('username')
                <div class="alert alert-danger mt-1" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                {{ Form::password('password', ['class'=>'form-control']) }}
                @error('password')
                <div class="alert alert-danger mt-1" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                {{ Form::text('email',null, ['class'=>'form-control']) }}
                @error('email')
                <div class="alert alert-danger mt-1" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Fullname</label>
                {{ Form::text('name',null, ['class'=>'form-control']) }}
                @error('name')
                <div class="alert alert-danger mt-1" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary"> Save</button>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection