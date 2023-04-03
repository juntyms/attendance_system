@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            {{ Form::open(['route'=>'departments.store']) }}
            @include('departments._form',['submitText'=>'Save'])
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection