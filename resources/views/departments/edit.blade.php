@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            {{ Form::model($department,['route'=>['departments.update',$department->id],'method'=>'put']) }}
            @include('departments._form',['submitText'=>' Update'])
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection