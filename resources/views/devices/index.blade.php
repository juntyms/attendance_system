@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">

        <div class="card-body">
            <h5>Devices</h5>
            <hr />

            <a href="{{ route('devices.create') }}" class="btn btn-outline-primary btn-icon-text">
                <i class="icon-file-add"></i>
                New Device
            </a>


            <div class="table-responsive">
                <table class="table table-bordered mt-2">
                    <tr class="bg-secondary">
                        <th>SN</th>
                        <th>IP</th>
                        <th>Device Name</th>
                        <th>Device Version</th>
                        <th>OS Version</th>
                        <th>Firmware</th>
                        <th>Serial Number</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @php $sn=1 @endphp
                    @foreach ($devices as $device)
                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td>{{ $device->ip }}</td>
                        <td>{{ $device->name }}</td>
                        <td>{{ $device->device_version }}</td>
                        <td>{{ $device->os_version }}</td>
                        <td>{{ $device->fmversion }}</td>
                        <td>{{ $device->serialnumber }}</td>
                        <td>{{ $device->status }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('devices.edit', $device->id) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Edit Device"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{ route('devices.delete',$device->id) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Device">
                                    <i class="icon-trash"></i>
                                </a>
                                <a href="{{ route('devices.fetch',$device->id) }}" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Fetch Attendance"><i class="icon-inbox"></i></a>
                                @if ($device->is_master == 0)
                                <a href="#" class="btn btn-sm btn-warning"><i class="icon-link"></i></a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection