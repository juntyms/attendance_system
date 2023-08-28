@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                {{ Form::open(['route'=>'rooms.store']) }}
                @include('rooms._form',['submitText'=>' Save'])
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection