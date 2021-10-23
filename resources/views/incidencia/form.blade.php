<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_inci') }}
            {{ Form::text('id_inci', $incidencia->id_inci, ['class' => 'form-control' . ($errors->has('id_inci') ? ' is-invalid' : ''), 'placeholder' => 'Id Inci']) }}
            {!! $errors->first('id_inci', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $incidencia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $incidencia->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::text('categoria', $incidencia->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_emp') }}
            {{ Form::text('id_emp', $incidencia->id_emp, ['class' => 'form-control' . ($errors->has('id_emp') ? ' is-invalid' : ''), 'placeholder' => 'Id Emp']) }}
            {!! $errors->first('id_emp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_clie') }}
            {{ Form::text('id_clie', $incidencia->id_clie, ['class' => 'form-control' . ($errors->has('id_clie') ? ' is-invalid' : ''), 'placeholder' => 'Id Clie']) }}
            {!! $errors->first('id_clie', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_prov') }}
            {{ Form::text('id_prov', $incidencia->id_prov, ['class' => 'form-control' . ($errors->has('id_prov') ? ' is-invalid' : ''), 'placeholder' => 'Id Prov']) }}
            {!! $errors->first('id_prov', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado') }}
            {{ Form::text('id_estado', $incidencia->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>