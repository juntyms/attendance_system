@extends('layouts.content')

@section('main')
    <div class="content-wrapper">

        {!! Form::model($student, ['route' => ['student.update', $student->id]]) !!}
        @include('student._form', ['buttonText' => ' Update'])
        {!! Form::close() !!}

    </div>
@endsection

@section('jscript')
    <script>
        $().ready(function() {

            $('#room_select2').mouseover(function(e) {
                $('#room_select2').select2();
            });
        });
    </script>
@endsection
