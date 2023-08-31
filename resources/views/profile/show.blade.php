@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            {{ Form::model($user,['route'=>'profile.update']) }}
            @include('users._form',['submitText' => 'Update'])
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection