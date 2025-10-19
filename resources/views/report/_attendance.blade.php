<h4 class="text-center"> {{ $report_type }} Report</h4>
<h4 class="text-center">From : {{ \Carbon\Carbon::parse($start_date)->format('d M Y') }} To :
    {{ \Carbon\Carbon::parse($end_date)->format('d M Y') }}</h4>
<table class="table table-bordered">
    <thead class="bg-primary text-white">
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
                <td><a href="{{ route('student.edit', $attendance->id) }}">{{ $attendance->student_id }}</a></td>
                <td>{{ $attendance->student_name }}</td>
                <td>{{ $attendance->email }}</td>
                <td>{{ $attendance->mobile_no }}</td>
                <td>{{ $attendance->dt }}</td>
                <td>{{ $attendance->pin ? \Carbon\Carbon::parse($attendance->pin)->format('H:i:s A') : '' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
