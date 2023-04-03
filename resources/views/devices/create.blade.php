<<<<<<< HEAD
@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            {{ Form::open(['route'=>'devices.store']) }}
            <div class="form-group">
                <label for="ip">Device IP Address</label>
                {{ Form::text('ip',null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                <label for="name">Device Name</label>
                {{ Form::text('name',null, ['class'=>'form-control']) }}
            </div>
            <button class="btn btn-success"> Save</button>
            {{ Form::close() }}
        </div>
=======
@extends('layouts.base')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">

        
    {{ Form::open(['route'=>'devices.store']) }}
        <div class="form-group">
            <label for="ip">Device IP Address</label>
            {{ Form::text('ip',null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            <label for="name">Device Name</label>
            {{ Form::text('name',null, ['class'=>'form-control']) }}
        </div>
        <button class="btn btn-success"> Save</button>
        {{ Form::close() }}
        </div>
>>>>>>> 470a2bf181d60e3f9912a82b24b2a182da6b4394
    </div>
</div>
@endsection