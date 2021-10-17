<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('dias') }}
            {{ Form::text('dias', $expira->dias, ['class' => 'form-control' . ($errors->has('dias') ? ' is-invalid' : ''), 'placeholder' => 'Dias']) }}
            {!! $errors->first('dias', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>