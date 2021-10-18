<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cod_piedepagina') }}
            {{ Form::text('cod_piedepagina', $piepagina->cod_piedepagina, ['class' => 'form-control' . ($errors->has('cod_piedepagina') ? ' is-invalid' : ''), 'placeholder' => 'Cod Piedepagina']) }}
            {!! $errors->first('cod_piedepagina', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name_piedepagina') }}
            {{ Form::text('name_piedepagina', $piepagina->name_piedepagina, ['class' => 'form-control' . ($errors->has('name_piedepagina') ? ' is-invalid' : ''), 'placeholder' => 'Name Piedepagina']) }}
            {!! $errors->first('name_piedepagina', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>