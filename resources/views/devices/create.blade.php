@extends('layouts.master')

@section('content')
<div class="container">
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
@endsection