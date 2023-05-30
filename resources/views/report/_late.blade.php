<h4 class="text-center"> {{ $report_type }} Report</h4>
<h4 class="text-center">From : {{ \Carbon\Carbon::parse($start_date)->format('d M Y') }} To : {{ \Carbon\Carbon::parse($end_date)->format('d M Y') }}</h4>
<table class="table table-bordered">
    <tr>
        <th>SN</th>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Leave Date</th>
        <th>Days Late</th>
    </tr>
    @php $sn =1 @endphp
    @foreach($student_leaves as $stud_leave)
    @php
    $diff = \Carbon\Carbon::parse($stud_leave->leavedate)->diffInDays(\Carbon\Carbon::today(), false);
    @endphp

    @if ($diff > 2)
    <tr>
        <td>{{ $sn++ }}</td>
        <td>{{ $stud_leave->student->student_id }}</td>
        <td>{{ $stud_leave->student->student_name }}</td>
        <td>{{ $stud_leave->leavedate }}</td>
        <td>{{ $diff }}</td>
    </tr>
    @endif
    @endforeach
</table>