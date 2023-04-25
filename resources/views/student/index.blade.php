@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            <h3 class="text-primary">Students List</h3>
            <a class="btn btn-info" href="{{route('student.add')}}"> <i class="icon-file-add"></i> New Student</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover mt-1">
                    <thead class="bg-secondary">
                        <tr>
                            <th class="text-white">No</th>
                            <th class="text-white">Student ID</th>
                            <th class="text-white">Student Name</th>
                            <th class="text-white">Email</th>
                            <th class="text-white">Mobile Number</th>
                            <th class="text-white">Department</th>
                            <th class="text-white">Building</th>
                            <th class="text-white">Room No</th>
                            <th class="text-white text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->student_id}}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->email}}</td>
                            <td>{{ $student->mobile_no}}</td>
                            <td>{{ $student->department->name }}</td>
                            <td>{{ $student->building->name}}</td>
                            <td>{{ $student->room_no }}</td>
                            <td class="text-center">
                                <a href="{{ route('student.edit',$student->id) }}" class="btn btn-sm btn-info text-center text-white btn-block">Edit</a>
                                <a href="#" class="btn btn-sm btn-success text-center text-white btn-block">Attendance</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection