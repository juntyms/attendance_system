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
            <th>Date</th>
            <th>Check In</th>


        </tr>
    </thead>
    <tbody>
        @php $sn=1 @endphp
        @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $sn++ }}</td>
                <td>{{ $attendance->buildingname }}</td>
                <td>{{ $attendance->roomname }}</td>
                <td>{{ $attendance->student_id }}</td>
                <td>{{ $attendance->student_name }}</td>
                <td>{{ $attendance->email }}</td>
                <td>{{ $attendance->mobile_no }}</td>
                <td>{{ $attendance->dt }}</td>
                <td>{{ $attendance->pin ? \Carbon\Carbon::parse($attendance->pin)->format('H:i:s A') : '' }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
