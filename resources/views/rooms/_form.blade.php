<div class="form-group">
    <label for="building">Building</label>
    {{ Form::select('building_id', $buildings, null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    <label for="floor">Floor</label>
    {{ Form::select('floor',
    [
    '0'=>'Ground',
    '1'=>'First Floor',
    '2'=>'Second Floor',
    '3'=>'Third Floor',
    ], null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    <label for="name">Room Name</label>
    {{ Form::text('name',null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    <label for="capacity">Capacity</label>
    {{ Form::number('capacity',null, ['class'=>'form-control']) }}
</div>
<button class="btn btn-info"> {{ $submitText }}</button>