@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('buildings.create') }}" class="btn btn-primary"> <i class="icon-file-add"></i> New</a>
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th>SN</th>
                    <th>Building Name</th>
                    <th>Action</th>
                </tr>
                @php $sn = 1; @endphp
                @foreach($buildings as $building)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $building->name }}</td>
                    <td>
                        <a href="{{ route('buildings.edit',$building->id) }}" class="btn btn-info"> Edit</a>
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