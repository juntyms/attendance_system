<style>
    #students {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #students td,
    #students th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #students tr:nth-child(even) {
        background-color: #ddd;
    }

    #students tr:hover {
        background-color: #ddd;
    }

    #students th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #9a1b96;
        color: white;
    }
</style>
<center>
    <h4 class="text-center"> {{ $report_type }} Report</h4>
    <h4 class="text-center">From : {{ \Carbon\Carbon::parse($start_date)->format('d M Y') }} To : {{ \Carbon\Carbon::parse($end_date)->format('d M Y') }}</h4>
</center>
<table id="students">
    <thead>
        <tr>
            <th>SN</th>
            <th>Building</th>
            <th>Room</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Leave Date</th>
            <th>Days Late</th>
        </tr>
    </thead>
    @php $sn =1 @endphp
    @foreach($student_leaves as $stud_leave)
    @php
    $diff = \Carbon\Carbon::parse($stud_leave->leavedate)->diffInDays(\Carbon\Carbon::today(), false);
    @endphp
    <tbody>
        @if ($diff > 2)
        <tr>
            <td>{{ $sn++ }}</td>
            <td>{{ $stud_leave->student->studentroom->room->building->name }}</td>
            <td>{{ $stud_leave->student->studentroom->room->name }}</td>
            <td>{{ $stud_leave->student->student_id }}</td>
            <td>{{ $stud_leave->student->student_name }}</td>
            <td>{{ $stud_leave->student->email }}</td>
            <td>{{ $stud_leave->student->mobile_no }}</td>
            <td>{{ $stud_leave->leavedate }}</td>
            <td>{{ $diff }}</td>
        </tr>
        @endif
        @endforeach
</table>