@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="card">

        <div class="card-body">
            <h4 class="card-title">Devices</h4>


            <a href="{{ route('devices.create') }}" class="btn btn-outline-primary btn-icon-text">
                <i class="mdi mdi-file-check btn-icon-prepend"></i>
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
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection