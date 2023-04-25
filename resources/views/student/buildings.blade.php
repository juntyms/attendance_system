@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    @foreach($buildings as $building)
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$building->id}}" aria-expanded="true" aria-controls="collapse{{$building->id}}">
                                {{ $building->name }}
                            </button>
                        </h2>
                    </div>

                    <div id="collapse{{$building->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Room Number</th>
                                </tr>
                                @foreach($building->students as $student)
                                <tr>
                                    <td>{{ $student->student_id }}</td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->room_no }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>

        </div>
    </div>
</div>
@endsection