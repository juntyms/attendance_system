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
    <h4> {{ $report_type }} Report</h4>
    <h4>From : {{ \Carbon\Carbon::parse($start_date)->format('d M Y') }} To : {{ \Carbon\Carbon::parse($end_date)->format('d M Y') }}</h4>
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
            <th>Date</th>
            <th>Check In</th>
            <th>Check Out</th>

        </tr>
    </thead>
    <tbody>
        @php $sn=1 @endphp
        @foreach($attendances as $attendance)
        <tr>
            <td>{{ $sn++ }}</td>
            <td>{{ $attendance->buildingname }}</td>
            <td>{{ $attendance->roomname }}</td>
            <td>{{ $attendance->student_id }}</td>
            <td>{{ $attendance->student_name }}</td>
            <td>{{ $attendance->email }}</td>
            <td>{{ $attendance->mobile_no }}</td>
            <td>{{ $attendance->dt }}</td>
            <td>{{ $attendance->pin ? \Carbon\Carbon::parse($attendance->pin)->format('H:i:s A') : "" }}</td>
            <td>{{ $attendance->pout ? \Carbon\Carbon::parse($attendance->pout)->format('H:i:s A') : ""}}</td>
        </tr>
        @endforeach
    </tbody>
</table>