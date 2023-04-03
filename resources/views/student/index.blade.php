@extends('layouts.content')

@section('main')
<div class="content-wrapper">
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <center>
                    <h3 class="text-primary font-italic">Students List</h3>
                </center>
            </div>
            <div class="row">

                <div class="row text-end">

                    <h5>
                        <a class="btn btn-success" href="{{route('student.add')}}"> Add New Student</a>
                    </h5>

                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="card mb-12">
                        <div class="card-body">
                            <div class=" table-responsive " style=" margin-left:20px; margin-right:20px">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>

                                        <tr>
                                            <th>No</th>
                                            <th>Student Id</th>
                                            <th>Student Name</th>
                                            <th>Department</th>
                                            <th>Building</th>
                                            <th>Email</th>
                                            <th>Mobile Number</th>
                                            <th>Attendace</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{$user->student_id}}</td>
                                            <td>{{ $user->student_name }}
                                            </td>
                                            <td>{{ $user->department->name }}</td>
                                            <td>{{$user->building->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->mobile_no}}</td>
                                            <td class="text-center"><a href=" #" class="btn btn-sm btn-info text-center text-white">view</a>
                                            </td>

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