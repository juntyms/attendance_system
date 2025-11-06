<table id="students">
    <thead>
        <tr>
            <th>SN</th>
            <th>Building</th>
            <th>Room</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Name Arabic</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Leave Date</th>
            <th>Days Late</th>
        </tr>
    </thead>
    @php $sn =1 @endphp
    @foreach ($student_leaves as $stud_leave)
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
                    <td>{{ $stud_leave->student->student_name_ar }}</td>
                    <td>{{ $stud_leave->student->email }}</td>
                    <td>{{ $stud_leave->student->mobile_no }}</td>
                    <td>{{ $stud_leave->leavedate }}</td>
                    <td>{{ $diff }}</td>
                </tr>
            @endif
    @endforeach
</table>
