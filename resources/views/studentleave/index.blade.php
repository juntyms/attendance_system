@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4>Student Leaves</h4>
            <hr />
            <a href="{{ route('studentleave.create') }}" class="btn btn-primary mt-2"> New Student Leave</a>
            <table class="table table-bordered table-striped mt-2">
                <tr class="bg-info text-white">
                    <th>SN</th>
                    <th>Student ID</th>
                    <th>Student Name (EN)</th>
                    <th>Student Name (AR)</th>
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
                    <td class="text-right">{{ $leave->student->student_name_ar }}</td>
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