<div class="form-group">
    <label for="ip">Device IP Address</label>
    {{ Form::text('ip',null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    <label for="name">Device Name</label>
    {{ Form::text('name',null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    <label for="devicetype">Device Type</label>
    {{ Form::select('device_type_id',$device_types, null, ['class'=>'form-control'] )}}
</div>
<div class="form-group">
    <div class="form-check form-check-primary">
        <label class="form-check-label">
            {{ Form::checkbox('is_master',1, null , ['class'=>'form-check-input']) }}
            Primary
            <i class="input-helper"></i></label>
    </div>

</div>
<button class="btn btn-success"> {{ $buttonText }}</button>