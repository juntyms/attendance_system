<table>
    <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Time In</th>
        <th>Time Out</th>

    </tr>
    @foreach($attendances as $attendance)
    <tr>
        <td>{{ $attendance->student_id }}</td>
        <td>{{ $attendance->student_name }}</td>
        <td>{{ $attendance->dt }}</td>
        <td>
            @if($attendance->pin)
            {{ \Carbon\Carbon::parse($attendance->pin)->format('H:i:s A') }}
            @endif
        </td>
        <td>
            @if ($attendance->pout)
            {{ \Carbon\Carbon::parse($attendance->pout)->format('H:i:s A') }}
            @endif
        </td>
    </tr>
    @endforeach
</table>