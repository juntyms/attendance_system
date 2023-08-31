@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    @livewire('studentroomassignment')

</div>
@endsection

@section('jscript')
{{-- <script>
    (function($) {
    'use strict';
        $("#student_select2").select2();
        $("#room_select2").select2();
    })(jQuery);
</script> --}}
<script>
    $().ready(function () {

            $('#student_select2').mouseover(function (e) {
                $('#student_select2').select2();
            });

            $('#room_select2').mouseover(function (e) {
                $('#room_select2').select2();
            });
        });
</script>
@endsection