<div class="container" style="background-color: #eee;">

    <div class="container py-5">
        <div class="row">
            <center>
                <h3 class="text-primary font-italic">Students Attendance</h3>
            </center>
        </div>
        <div class="row">

            <div class="row text-end">


                <h5>
                    <button class="btn btn-info" wire:click="connecting()">
                        Update</button>
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
                                        <td>{{$att->punchtime}}</td>
                                        <td>{{$att->type}}</td>
                                        <td>{{$att->state_id}}</td>


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


</div>