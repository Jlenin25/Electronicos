<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ruc') }}
            {{ Form::text('ruc', $cliente->ruc, ['class' => 'form-control' . ($errors->has('ruc') ? ' is-invalid' : ''), 'placeholder' => 'Ruc']) }}
            {!! $errors->first('ruc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular1') }}
            {{ Form::text('celular1', $cliente->celular1, ['class' => 'form-control' . ($errors->has('celular1') ? ' is-invalid' : ''), 'placeholder' => 'Celular1']) }}
            {!! $errors->first('celular1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email1') }}
            {{ Form::text('email1', $cliente->email1, ['class' => 'form-control' . ($errors->has('email1') ? ' is-invalid' : ''), 'placeholder' => 'Email1']) }}
            {!! $errors->first('email1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paginaweb') }}
            {{ Form::text('paginaweb', $cliente->paginaweb, ['class' => 'form-control' . ($errors->has('paginaweb') ? ' is-invalid' : ''), 'placeholder' => 'Paginaweb']) }}
            {!! $errors->first('paginaweb', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estadocliente') }}
            {{ Form::select('id_estadocliente', $estado, $cliente->id_estadocliente, ['class' => 'form-control' . ($errors->has('id_estadocliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Estadocliente']) }}
            {!! $errors->first('id_estadocliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('razonsocial') }}
            {{ Form::text('razonsocial', $cliente->razonsocial, ['class' => 'form-control' . ($errors->has('razonsocial') ? ' is-invalid' : ''), 'placeholder' => 'Razonsocial']) }}
            {!! $errors->first('razonsocial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $cliente->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular2') }}
            {{ Form::text('celular2', $cliente->celular2, ['class' => 'form-control' . ($errors->has('celular2') ? ' is-invalid' : ''), 'placeholder' => 'Celular2']) }}
            {!! $errors->first('celular2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email2') }}
            {{ Form::text('email2', $cliente->email2, ['class' => 'form-control' . ($errors->has('email2') ? ' is-invalid' : ''), 'placeholder' => 'Email2']) }}
            {!! $errors->first('email2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_area') }}
            {{ Form::text('id_area', $cliente->id_area, ['class' => 'form-control' . ($errors->has('id_area') ? ' is-invalid' : ''), 'placeholder' => 'Id Area']) }}
            {!! $errors->first('id_area', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::select('id_user', $asignado, $cliente->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>