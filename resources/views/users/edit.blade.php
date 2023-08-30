@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h5> Update User </h5>
            <hr />
            {{ Form::model($user, ['route'=>['users.update', $user->id]]) }}
            @include('users._form',['submitText'=>' Update'])
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection