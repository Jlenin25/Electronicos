<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('monedas') }}
            {{ Form::text('monedas', $moneda->monedas, ['class' => 'form-control' . ($errors->has('monedas') ? ' is-invalid' : ''), 'placeholder' => 'Monedas']) }}
            {!! $errors->first('monedas', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>