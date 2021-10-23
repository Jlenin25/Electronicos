<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('piedepagina') }}
            {{ Form::text('piedepagina', $piepagina->piedepagina, ['class' => 'form-control' . ($errors->has('piedepagina') ? ' is-invalid' : ''), 'placeholder' => 'Piedepagina']) }}
            {!! $errors->first('piedepagina', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>