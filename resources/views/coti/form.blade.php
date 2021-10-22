<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::select('id_cliente', $cliente, $coti->id_cliente, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asignado') }}
            {{ Form::select('id_user', $asignado, $coti->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Aisgnado']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_expira') }}
            {{ Form::select('id_expira', $expira, $coti->id_expira, ['class' => 'form-control' . ($errors->has('id_expira') ? ' is-invalid' : ''), 'placeholder' => 'Expira']) }}
            {!! $errors->first('id_expira', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_moneda') }}
            {{ Form::select('id_moneda', $moneda, $coti->id_moneda, ['class' => 'form-control' . ($errors->has('id_moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda']) }}
            {!! $errors->first('id_moneda', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tiempoentrega') }}
            {{ Form::select('id_tiempoentrega', $entrega, $coti->id_tiempoentrega, ['class' => 'form-control' . ($errors->has('id_tiempoentrega') ? ' is-invalid' : ''), 'placeholder' => 'Tiempoentrega']) }}
            {!! $errors->first('id_tiempoentrega', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_formapago') }}
            {{ Form::select('id_formapago', $pago, $coti->id_formapago, ['class' => 'form-control' . ($errors->has('id_formapago') ? ' is-invalid' : ''), 'placeholder' => 'Formapago']) }}
            {!! $errors->first('id_formapago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estado') }}
            {{ Form::select('id_estado', $estado, $coti->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_piepagina') }}
            {{ Form::select('id_piepagina', $pagina, $coti->id_piepagina, ['class' => 'form-control' . ($errors->has('id_piepagina') ? ' is-invalid' : ''), 'placeholder' => 'Piepagina']) }}
            {!! $errors->first('id_piepagina', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_condicions') }}
            {{ Form::select('id_condicions', $condicion, $coti->id_condicions, ['class' => 'form-control' . ($errors->has('id_condicions') ? ' is-invalid' : ''), 'placeholder' => 'Condicions']) }}
            {!! $errors->first('id_condicions', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>