<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('situacion') }}
            {{ Form::text('situacion', $estadocliente->situacion, ['class' => 'form-control' . ($errors->has('situacion') ? ' is-invalid' : ''), 'placeholder' => 'Situacion']) }}
            {!! $errors->first('situacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>