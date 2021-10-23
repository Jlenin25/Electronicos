<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('condicionesgenerales') }}
            {{ Form::text('condicionesgenerales', $condicion->condicionesgenerales, ['class' => 'form-control' . ($errors->has('condicionesgenerales') ? ' is-invalid' : ''), 'placeholder' => 'Condicionesgenerales']) }}
            {!! $errors->first('condicionesgenerales', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>