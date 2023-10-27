@extends('layouts.content')

@section('main')
<div class="content-wrapper">

    <div class="card">
        <div class="card-body">
            <h4>Students List</h4>
            <hr />
            <div class="mb-2">
                <a class="btn btn-info" href="{{route('student.add')}}"> <i class="icon-file-add"></i> New Student</a>
                <a href="{{ route('students.upload') }}" class="btn btn-success"> <i class="icon-upload"></i> Upload Excel</a>
            </div>

            <table class="table table-striped table-bordered table-hover table-responsive mt-2" id="students_table">
                <tfoot>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Name Ar</th>
                        <th>Email</th>
                        <th>Emergency No</th>
                        <th>Mobile Number</th>
                        <th>Room No</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <thead class="bg-info">
                    <tr>
                        <th class="text-white">Student ID</th>
                        <th class="text-white">Student Name(EN)</th>
                        <th class="text-white">Student Name(AR)</th>
                        <th class="text-white">Email</th>
                        <th class="text-white">Emergency No.</th>
                        <th class="text-white">Mobile Number</th>
                        <th class="text-white">Room No</th>
                        <th class="text-white text-center">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->student_id}}</td>
                        <td>{{ $student->student_name }}</td>
                        <td class="text-right">{{ $student->student_name_ar }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <ul>
                                <li>{{ $student->emergency_no ?? ""}}</li>
                                <li>{{ $student->emergency2_no ?? ""}}</li>
                                <li>{{ $student->emergency3_no ?? ""}}</li>
                            </ul>

                        </td>
                        <td>{{ $student->mobile_no ?? ""}}</td>
                        <td>{{ $student->roomname ?? "" }}</td>
                        <td class="text-center">
                            <a href="{{ route('student.edit',$student->id) }}" class="btn btn-sm btn-info text-center text-white btn-block"><i class="icon-file"></i> Edit</a>
                            @if ($student->roomname)
                            <a href="{{ route('student.deleteroomassignment',$student->studentroomid) }}" class="btn btn-sm btn-danger text-white btn-block"> <i class="icon-trash"></i> Delete Room</a>
                            @endif`
                            @if ($student->is_pushed == 0)
                            <a href="{{ route('student.push',$student->id) }}" class="btn btn-sm btn-warning text-center text-white btn-block"> <i class="icon-link"></i> Push</a>
                            @else

                            <a href="{{ route('student.pushtodevice', $student->id) }}" class="btn btn-sm btn-warning text-center text-white btn-block"> <i class="icon-layout"></i> Push to Bldg </a>

                            <a href="{{ route('student.deletefromdevice',$student->id) }}" class="btn btn-sm btn-danger text-center text-white btn-block"> <i class="icon-maximize"></i> Un Push</a>

                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection

@section('css')
<style>
    tfoot {
        display: table-row-group;
    }
</style>
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
