@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
            <p class="font-weight-normal mb-2 text-muted">{{ Now() }}</p>
        </div>
    </div>
    <div class="row mt-3">

        <div class="col-xl-12 d-flex grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Student Attendance</h4>
                    {!! $studentAttendancechart->container() !!}

                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('jscript')

<script src="{{ @asset('vendor/larapex-charts/apexcharts.js') }}"></script>
{{ $studentAttendancechart->script() }}
@endsection