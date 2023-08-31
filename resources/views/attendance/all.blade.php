@extends('layouts.base')

@section('title')
All Attendance
@endsection

@section('content')

<div class="container">
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <center>
                    <h4 class="text-primary font-italic">Students Attendance</h4>
                </center>
            </div>
            <div class="row">

                <div class="row text-end">


                    <h5>

                        <a class="btn btn-info mt-2" href="{{route('attendance.update')}}">
                            Update
                        </a>

                    </h5>

                </div>

            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="card mb-12">
                        <div class="card-body">
                            <div class=" table-responsive " style=" margin-left:20px; margin-right:20px">
                                <table id="" class="table table-striped" style="width:100%">
                                    <thead>

                                        <tr>
                                            <th>No</th>
                                            <th>Student Id</th>
                                            <th>Student Name</th>
                                            <th>Attendance Type</th>
                                            <th>Attendance Status</th>
                                            <th> Attendance</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=0)
                                        @foreach ($attendance as $att)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{$att->student_id}}</td>
                                            <td>{{$att->student->student_name ?? " "}}</td>
                                            <td>{{$att->state->name ?? " "}}</td>
                                            <td>{{$att->types->name ?? " "}}</td>

                                            <td>{{$att->punchtime}}</td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
</div>

@endsection