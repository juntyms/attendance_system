@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    {!! Form::open(['route' => 'student.store']) !!}
    @include('student._form',['buttonText'=>' Save'])
    {!! Form::close() !!}

</div>
@endsection

@section('jscript')
<script>
    $("#student_id").keyup(function() {
        $("#email").val($("#student_id").val() + "@du.edu.om");
    });
</script>
@endsection