@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5>Assign Coordinator to {{ $building->name }}</h5>
                <hr />
                {{ Form::open(['route'=>['coordinators.saveassign',$building->id]]) }}
                <div class="form-group">
                    <label for="User">User</label>
                    <select name="user_id" class="form-control" "required">
                        <option> Select User </option>
                        @foreach($userselect as $uselect)
                        <option value="{{ $uselect->id }}">{{ $uselect->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary"> Save</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card mt-2">
            <div class="card-body">
                <h5>List of Assigned Coordinator to {{ $building->name }}</h5>
                <table class="table table-bordered">
                    <tr class="bg-secondary">
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>

                    </tr>
                    @php $sn=1 @endphp
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
