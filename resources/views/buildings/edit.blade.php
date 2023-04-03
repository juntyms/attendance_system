@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            {{ Form::model($building,['route'=>['buildings.update',$building->id],'method'=>'put']) }}
            @include('buildings._form',['submitText'=>' Update'])
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection