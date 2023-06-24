@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h3>Room List</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>SN</th>
                    <th>Building</th>
                    <th>Floor Level</th>
                    <th>Room Number</th>
                    <th>Capacity</th>
                    <th>Occupancy</th>
                </tr>
                @php $sn=1; @endphp
                @foreach($rooms as $room)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $room->building->name }}</td>
                    <td>{{ $room->floor }}</td>
                    <td>{{ $room->name }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection