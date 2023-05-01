@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h5> Users </h5>
            <hr />
            <a href="{{ route('users.create') }}" class="btn btn-outline-primary"> <i class="icon-file-add"></i> New</a>
            <table class="table table-bordered table-hover mt-2">
                <tr class="bg-secondary">
                    <th class=" col-1">SN</th>
                    <th class="">Username</th>
                    <th class="">Email</th>
                    <th class="">Name</th>
                    <th class="">Role</th>
                    <th class="">Permission</th>
                    <th class="">Actions</th>
                </tr>
                @php $sn = 1 @endphp
                @foreach($users as $user)
                <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        <ul>
                            @foreach($user->getRoleNames() as $role)
                            @if ($role)
                            <li>{{ $role }} <a href="{{ route('users.revokerole',[$user, $role]) }}"><i class="icon-cross text-danger"></i></a></li>
                            @endif
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach($user->getAllPermissions() as $permission)
                            <li>{{ $permission->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <a href="{{ route('users.addrole',$user->id) }}" class="btn btn-info btn-sm"> Privileges / Roles </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection