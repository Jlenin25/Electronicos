<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('efectivo') }}
            {{ Form::text('efectivo', $formapago->efectivo, ['class' => 'form-control' . ($errors->has('efectivo') ? ' is-invalid' : ''), 'placeholder' => 'Efectivo']) }}
            {!! $errors->first('efectivo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('credito') }}
            {{ Form::text('credito', $formapago->credito, ['class' => 'form-control' . ($errors->has('credito') ? ' is-invalid' : ''), 'placeholder' => 'Credito']) }}
            {!! $errors->first('credito', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>