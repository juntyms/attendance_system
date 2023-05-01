@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            {{ Form::model($device,['route'=>['devices.update',$device->id]]) }}
            @include('devices._form',['buttonText'=>' Update'])
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection