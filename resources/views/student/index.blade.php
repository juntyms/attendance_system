@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            <h3 class="text-primary">Students List</h3>
            <a class="btn btn-info" href="{{route('student.add')}}"> <i class="icon-file-add"></i> New Student</a>

            <table class="table table-striped table-bordered table-hover mt-1" id="students_table">
                <thead class="bg-info">
                    <tr>
                        <th class="text-white">No</th>
                        <th class="text-white">Student ID</th>
                        <th class="text-white">Student Name</th>
                        <th class="text-white">Email</th>
                        <th class="text-white">Mobile Number</th>
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
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->mobile_no ?? ""}}</td>
                        <td>{{ $student->buildingname ?? ""}}</td>
                        <td>{{ $student->roomname ?? "" }}</td>
                        <td class="text-center">
                            <a href="{{ route('student.edit',$student->id) }}" class="btn btn-sm btn-info text-center text-white btn-block">Edit</a>
                            @if ($student->roomname)
                            <a href="{{ route('student.deleteroomassignment',$student->studentroomid) }}" class="btn btn-sm btn-success text-white btn-block"> Delete Room</a>
                            @endif`
                            @if ($student->is_pushed == 0)
                            <a href="{{ route('student.push',$student->id) }}" class="btn btn-sm btn-warning text-center text-white btn-block">Push</a>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Building</th>
                        <th>Room No</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>

</div>
@endsection

@section('jscript')
<script>
    new DataTable('#students_table', {
        initComplete: function () {
            this.api()
                .columns()
                .every(function () {
                let column = this;
                let title = column.footer().textContent;

                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);

                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
        }
    });
</script>
@endsection