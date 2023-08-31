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
                    <tr class="bg-info text-white">
                        <th>SN</th>
                        <th>Primary Device</th>
                        <th>Device Type</th>
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
                        <td class="text-center">
                            @if ($device->is_master)
                            <span class="text-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                </svg>
                            </span>
                            @else
                            <span class="text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            @endif
                        </td>
                        <td>{{ $device->devicetype->name ?? "" }}</td>
                        <td>{{ $device->ip }}</td>
                        <td>{{ $device->name }}</td>
                        <td>{{ $device->device_version }}</td>
                        <td>{{ $device->os_version }}</td>
                        <td>{{ $device->fmversion }}</td>
                        <td>{{ $device->serialnumber }}</td>
                        <td>
                            @if ($device->status == 'Active')
                            <span class="badge bg-success text-white">{{ $device->status }}</span>
                            @else
                            <span class="badge bg-danger text-white">{{ $device->status }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <a href="{{ route('devices.edit', $device->id) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Edit Device"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{ route('devices.delete',$device->id) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Device">
                                    <i class="icon-trash"></i>
                                </a>
                                <a href="{{ route('devices.fetch',$device->id) }}" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Fetch Attendance"><i class="icon-inbox"></i></a>

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