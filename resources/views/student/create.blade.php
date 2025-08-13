@extends('layouts.content')

@section('main')
    <div class="content-wrapper">

        {!! Form::open(['route' => 'student.store']) !!}
        @include('student._form', ['buttonText' => ' Save'])
        {!! Form::close() !!}

    </div>
@endsection

@section('jscript')
    <script>
        $("#student_id").keyup(function() {
            $("#email").val($("#student_id").val() + "@du.edu.om");
        });
    </script>

    <script>
        $().ready(function() {



            $('#room_select2').mouseover(function(e) {
                $('#room_select2').select2();
            });
        });
    </script>
@endsection
