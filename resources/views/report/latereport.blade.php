@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <button onclick="window.print()" class="text-right btn btn-info d-print-none"><i class="icon-printer"></i></button>
            @include('report._late')
        </div>
    </div>
</div>
@endsection