@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h1>Student Leaves</h1>
            <a href="{{ route('studentleave.create') }}" class="btn btn-primary mt-2"> New Student Leave</a>
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th>SN</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Date Left</th>
                    <th>Date Returned</th>
                    <th>Action</th>
                </tr>
                @php $sn = 1 @endphp
                @foreach($studentleaves as $leave)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $leave->student->student_id }}</td>
                    <td>{{ $leave->student->student_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($leave->leave_date)->format('d-M-Y') }}</td>
                    <td>
                        @if ($leave->return_date)
                        {{ \Carbon\Carbon::parse($leave->return_date)->format('d-M-Y') }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('studentleave.return', $leave->id) }}" class="btn btn-success"> Set Return</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection