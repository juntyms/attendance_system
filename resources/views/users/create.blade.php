@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h5> Create New User </h5>
            <hr />
            {{ Form::open(['route'=>'users.store']) }}
            @include('users._form',['submitText'=>' Save'])
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection