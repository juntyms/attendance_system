@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Room List</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('rooms.create') }}" class="btn btn-primary btn-sm mb-2">Add Room</a>
            <table class="table table-bordered table-hover">
                <tr class="bg-info">
                    <th class="text-white">SN</th>
                    <th class="text-white">Building</th>
                    <th class="text-white">Floor Level</th>
                    <th class="text-white">Room Number</th>
                    <th class="text-white">Capacity</th>
                    <th class="text-white">Action</th>
                </tr>
                @php $sn=1; @endphp
                @foreach($rooms as $room)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $room->building->name }}</td>
                    <td>{{ $room->floor }}</td>
                    <td>{{ $room->name }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>
                        <a href="{{ route('rooms.edit',$room->id) }}" class="btn btn-sm btn-warning"> Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection