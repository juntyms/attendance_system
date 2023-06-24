<div>
    <div class="col-md-4">

        <div class="card">
            <div class="card-body">
                {{ Form::open(['route'=>'student.saveroomassignment']) }}
                <div class="form-group">
                    <label for="building">Building</label>
                    <select class="form-control" wire:model="choosenBuilding">
                        <option>Select Building</option>
                        @foreach($this->buildings as $building)
                        <option value="{{ $building->id }}">{{ $building->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="floor_level">Floor Level</label>
                    <select class="form-control" wire:model="choosenFloor">
                        <option>Select Floor Level</option>
                        @if(!is_null($choosenBuilding))
                        @foreach($this->floors as $floor)
                        <option value="{{ $floor->floor }}">{{ $floor->floor }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="room">Room</label>
                    <select class="form-control" wire:model="choosenRoom" name="room_id">
                        <option>Select Room</option>
                        @if(!is_null($choosenFloor))
                        @foreach($this->rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="student">Student</label>
                    <select class="form-control" name="student_id">
                        <option selected>Select Student</option>
                        @foreach($this->students as $student)
                        <option value="{{ $student->id }}">{{ $student->student_name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary"> Assign</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>