@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">

            <a href="{{ route('departments.create') }}" class="btn btn-primary"><i class="icon-file-add"></i> New</a>

            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th class="col-md-1">SN</th>
                    <th>Department Name</th>
                    <th>Action</th>
                </tr>
                @php $sn = 1 @endphp
                @foreach($departments as $department)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $department->name }}</td>
                    <td>
                        <a href="{{ route('departments.edit',$department->id) }}" class="btn btn-info"> <i class="icon-paper"></i> Edit</a>
                        <a onclick="document.getElementById('formdelete{{ $department->id }}').submit();" class="btn btn-danger"> <i class="icon-trash"></i> Delete</a>
                        {{ Form::open(['route'=>['departments.destroy',$department->id],'method'=>'delete','id'=>'formdelete'.$department->id]) }}


                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection