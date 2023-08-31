@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4>Room List</h4>
            <hr />
            <a href="{{ route('rooms.create') }}" class="btn btn-primary btn-sm mb-2">Add Room</a>
            <table class="table table-bordered table-hover" id="rooms">
                <tfoot>
                    <tr>
                        <th>SN</th>
                        <th>Building</th>
                        <th>Floor Level</th>
                        <th>Room Number</th>
                        <th>Capacity</th>
                        <th>&nbsp;</th>
                    </tr>
                </tfoot>
                <thead>
                    <tr class="bg-info">
                        <th class="text-white">SN</th>
                        <th class="text-white">Building</th>
                        <th class="text-white">Floor Level</th>
                        <th class="text-white">Room Number</th>
                        <th class="text-white">Capacity</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>
                @php $sn=1; @endphp
                <tbody>
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
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    tfoot {
        display: table-row-group;
    }
</style>
@endsection

@section('jscript')
<script>
    new DataTable('#rooms', {
        initComplete: function () {
            this.api()
                .columns()
                .every(function () {
                let column = this;
                let title = column.footer().textContent;

                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);

                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
        }
    });
</script>
@endsection