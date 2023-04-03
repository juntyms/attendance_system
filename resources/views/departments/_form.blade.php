<div class="form-group">
    <label for="name">Department Name</label>
    {{ Form::text('name',null,['class'=>'form-control']) }}
</div>
<button class="btn btn-primary"> {{ $submitText }}</button>