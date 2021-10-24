<div class="box box-info padding-1">
    <div class="row g-3">
        <div class="col-md-4">
            {{ Form::label('RUC') }}
            {{ Form::text('ruc', $proveedor->ruc, ['class' => 'form-control' . ($errors->has('ruc') ? ' is-invalid' : ''), 'placeholder' => 'RUC']) }}
            {!! $errors->first('ruc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('dirección') }}
            {{ Form::text('direccion', $proveedor->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('razon social') }}
            {{ Form::text('razonsocial', $proveedor->razonsocial, ['class' => 'form-control' . ($errors->has('razonsocial') ? ' is-invalid' : ''), 'placeholder' => 'Razonsocial']) }}
            {!! $errors->first('razonsocial', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            {{ Form::label('celular 1') }}
            {{ Form::text('celular1', $proveedor->celular1, ['class' => 'form-control' . ($errors->has('celular1') ? ' is-invalid' : ''), 'placeholder' => 'Celular1']) }}
            {!! $errors->first('celular1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('email 1') }}
            {{ Form::text('email1', $proveedor->email1, ['class' => 'form-control' . ($errors->has('email1') ? ' is-invalid' : ''), 'placeholder' => 'Email1']) }}
            {!! $errors->first('email1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('pagina web') }}
            {{ Form::text('paginaweb', $proveedor->paginaweb, ['class' => 'form-control' . ($errors->has('paginaweb') ? ' is-invalid' : ''), 'placeholder' => 'Paginaweb']) }}
            {!! $errors->first('paginaweb', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            {{ Form::label('celular 2') }}
            {{ Form::text('celular2', $proveedor->celular2, ['class' => 'form-control' . ($errors->has('celular2') ? ' is-invalid' : ''), 'placeholder' => 'Celular2']) }}
            {!! $errors->first('celular2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('email 2') }}
            {{ Form::text('email2', $proveedor->email2, ['class' => 'form-control' . ($errors->has('email2') ? ' is-invalid' : ''), 'placeholder' => 'Email2']) }}
            {!! $errors->first('email2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('contaco') }}
            {{ Form::text('contaco', $proveedor->contaco, ['class' => 'form-control' . ($errors->has('contaco') ? ' is-invalid' : ''), 'placeholder' => 'Contaco']) }}
            {!! $errors->first('contaco', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            {{ Form::label('estado proveedor') }}
            {{ Form::select('id_estadocliente', $estado, $proveedor->id_estadocliente, ['class' => 'form-control' . ($errors->has('id_estadocliente') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_estadocliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('Área') }}
            {{ Form::select('id_area', $area, $proveedor->id_area, ['class' => 'form-control' . ($errors->has('id_area') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_area', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('asignado') }}
            {{ Form::select('id_user', $asignado, $proveedor->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn bg-warning">Añadir</button>
    </div>
</div>
