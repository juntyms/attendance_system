@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                {{ Form::open(['route'=>'report.saveschedule']) }}
                <div class="form-group">
                    <label for="schedule">Schedule</label>
                    <select name="frequency_method" id="" class="form-control" required>
                        <option value="everyMinute">everyMinute</option>
                        <option value="hourly">hourly</option>
                        <option value="daily">daily</option>
                        <option value="weekly">weekly</option>
                    </select>
                </div>
                <button class="btn btn-primary">
                    Update
                </button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Report Name</th>
                            <th>Frequency</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($report_schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->report_name }}</td>
                            <td>{{ $schedule->frequency_method }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection