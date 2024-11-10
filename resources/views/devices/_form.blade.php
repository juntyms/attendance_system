<div class="form-group row m-0">
    <label for="ip" class="col-sm-3 col-form-label">Device IP Address</label>
    <div class="col-sm-9">
        {{ Form::text('ip', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group row m-0">
    <label for="name" class="col-sm-3 col-form-label">Device Name</label>
    <div class="col-sm-9">
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group row m-0">
    <label for="devicetype" class="col-sm-3 col-form-label">Device Type</label>
    <div class="col-sm-9">
        {{ Form::select('device_type_id', $device_types, null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group row m-0">
    <label for="location" class="col-sm-3 col-form-label">Building Location</label>
    <div class="col-sm-9">
        {{ Form::select('building_id', $buildings, null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group m-0">
    <div class="offset-sm-3 col-sm-9">
        <div class="form-check form-check-primary">
            <label class="form-check-label">
                {{ Form::checkbox('is_master', 1, null, ['class' => 'form-check-input']) }}
                Primary
                <i class="input-helper"></i></label>
        </div>
    </div>
</div>
<button class="btn btn-success"> {{ $buttonText }}</button>
