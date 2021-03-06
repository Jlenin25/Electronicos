<div class="box box-info padding-1">
    <div class="row g-3">
        <div class="col-md-4">
            {{ Form::label('RUC') }}
            {{ Form::text('ruc', $cliente->ruc, ['class' => 'form-control' . ($errors->has('ruc') ? ' is-invalid' : ''), 'placeholder' => 'RUC']) }}
            {!! $errors->first('ruc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('dirección') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('razon social') }}
            {{ Form::text('razonsocial', $cliente->razonsocial, ['class' => 'form-control' . ($errors->has('razonsocial') ? ' is-invalid' : ''), 'placeholder' => 'Razon social']) }}
            {!! $errors->first('razonsocial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            {{ Form::label('celular 1') }}
            {{ Form::text('celular1', $cliente->celular1, ['class' => 'form-control' . ($errors->has('celular1') ? ' is-invalid' : ''), 'placeholder' => 'Celular 1']) }}
            {!! $errors->first('celular1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('email 1') }}
            {{ Form::text('email1', $cliente->email1, ['class' => 'form-control' . ($errors->has('email1') ? ' is-invalid' : ''), 'placeholder' => 'Email 1']) }}
            {!! $errors->first('email1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('pagina web') }}
            {{ Form::text('paginaweb', $cliente->paginaweb, ['class' => 'form-control' . ($errors->has('paginaweb') ? ' is-invalid' : ''), 'placeholder' => 'Pagina web']) }}
            {!! $errors->first('paginaweb', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            {{ Form::label('celular 2') }}
            {{ Form::text('celular2', $cliente->celular2, ['class' => 'form-control' . ($errors->has('celular2') ? ' is-invalid' : ''), 'placeholder' => 'Celular 2']) }}
            {!! $errors->first('celular2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('email 2') }}
            {{ Form::text('email2', $cliente->email2, ['class' => 'form-control' . ($errors->has('email2') ? ' is-invalid' : ''), 'placeholder' => 'Email2']) }}
            {!! $errors->first('email 2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $cliente->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            {{ Form::label('estado cliente') }}
            {{ Form::select('id_estadocliente', $estado, $cliente->id_estadocliente, ['class' => 'form-control' . ($errors->has('id_estadocliente') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_estadocliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('Área') }}
            {{ Form::select('id_area', $area, $cliente->id_area, ['class' => 'form-control' . ($errors->has('id_area') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_area', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('Asignado') }}
            {{ Form::select('id_user', $asignado, $cliente->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn bg-warning">Añadir</button>
    </div>
</div>