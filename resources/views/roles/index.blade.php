@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            <h5>Roles and Permissions</h5>
            <hr />
            <a href="{{ route('roles.create') }}" class="btn btn-outline-primary"> <i class="icon-file-add"></i> Add Role</a>
            <table class="table bordered mt-2">
                <thead>
                    <tr class="bg-secondary">
                        <th class="col-1">SN</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sn=1 @endphp
                    @foreach($roles as $role)
                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td>{{ $role->name }}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection