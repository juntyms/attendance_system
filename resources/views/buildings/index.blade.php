@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h5>Buildings</h5>
            <hr />
            <a href="{{ route('buildings.create') }}" class="btn btn-outline-primary"> <i class="icon-file-add"></i> New</a>
            <table class="table table-bordered table-striped mt-2">
                <tr class="bg-info text-white">
                    <th>SN</th>
                    <th>Building Name</th>
                    <th>Assigned Coordinators</th>
                    <th>Action</th>
                </tr>
                @php $sn = 1; @endphp
                @foreach($buildings as $building)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $building->name }}</td>
                    <td>
                        <ul>
                            @foreach($building->coordinators as $coordinator)
                            <li>{{ $coordinator->user->name }}

                                <a href="{{ route('coordinator.delete',$coordinator->id) }}">
                                    <i class="icon-cross icon-md text-danger"></i>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <a href="{{ route('buildings.edit',$building->id) }}" class="btn btn-info"> Edit</a>
                        <a href="{{ route('coordinators.assign',$building) }}" class="btn btn-warning">Assign Coordinator</a>
                        <a onclick="document.getElementById('formdelete{{ $building->id }}').submit();" class="btn btn-danger"> <i class="icon-trash"></i> Delete</a>
                        {{ Form::open(['route'=>['buildings.destroy',$building->id],'method'=>'delete','id'=>'formdelete'.$building->id]) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection