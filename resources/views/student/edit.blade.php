@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    {!! Form::model($student,['route' => ['student.update',$student->id]]) !!}
    @include('student._form',['buttonText'=>' Update'])
    {!! Form::close() !!}

</div>
@endsection