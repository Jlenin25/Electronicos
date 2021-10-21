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
            {{ Form::label('celular 1') }}
            {{ Form::text('celular1', $cliente->celular1, ['class' => 'form-control' . ($errors->has('celular1') ? ' is-invalid' : ''), 'placeholder' => 'Celular1']) }}
            {!! $errors->first('celular1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email 1') }}
            {{ Form::text('email1', $cliente->email1, ['class' => 'form-control' . ($errors->has('email1') ? ' is-invalid' : ''), 'placeholder' => 'Email1']) }}
            {!! $errors->first('email1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pagina web') }}
            {{ Form::text('paginaweb', $cliente->paginaweb, ['class' => 'form-control' . ($errors->has('paginaweb') ? ' is-invalid' : ''), 'placeholder' => 'Paginaweb']) }}
            {!! $errors->first('paginaweb', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $cliente->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('razon social') }}
            {{ Form::text('razonsocial', $cliente->razonsocial, ['class' => 'form-control' . ($errors->has('razonsocial') ? ' is-invalid' : ''), 'placeholder' => 'Razonsocial']) }}
            {!! $errors->first('razonsocial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $cliente->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular 2') }}
            {{ Form::text('celular2', $cliente->celular2, ['class' => 'form-control' . ($errors->has('celular2') ? ' is-invalid' : ''), 'placeholder' => 'Celular2']) }}
            {!! $errors->first('celular2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email 2') }}
            {{ Form::text('email2', $cliente->email2, ['class' => 'form-control' . ($errors->has('email2') ? ' is-invalid' : ''), 'placeholder' => 'Email2']) }}
            {!! $errors->first('email2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $cliente->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asignado') }}
            {{ Form::text('asignado', $cliente->asignado, ['class' => 'form-control' . ($errors->has('asignado') ? ' is-invalid' : ''), 'placeholder' => 'Asignado']) }}
            {!! $errors->first('asignado', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
