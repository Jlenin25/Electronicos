<div class="box box-info padding-1">
    <div class="row g-3">
        <div class="col-md-4">
            {{ Form::label('cliente') }}
            {{ Form::select('id_cliente', $cliente, $coti->id_cliente, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('Asignado') }}
            {{ Form::select('id_user', $asignado, $coti->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('expira') }}
            {{ Form::select('id_expira', $expira, $coti->id_expira, ['class' => 'form-control' . ($errors->has('id_expira') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_expira', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            {{ Form::label('moneda') }}
            {{ Form::select('id_moneda', $moneda, $coti->id_moneda, ['class' => 'form-control' . ($errors->has('id_moneda') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_moneda', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('tiempo de entrega') }}
            {{ Form::select('id_tiempoentrega', $entrega, $coti->id_tiempoentrega, ['class' => 'form-control' . ($errors->has('id_tiempoentrega') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_tiempoentrega', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('forma de pago') }}
            {{ Form::select('id_formapago', $pago, $coti->id_formapago, ['class' => 'form-control' . ($errors->has('id_formapago') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_formapago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            {{ Form::label('estado') }}
            {{ Form::select('id_estado', $estado, $coti->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('pie de pagina') }}
            {{ Form::select('id_piepagina', $pagina, $coti->id_piepagina, ['class' => 'form-control' . ($errors->has('id_piepagina') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_piepagina', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="col-md-4">
            {{ Form::label('condición') }}
            {{ Form::select('id_condicions', $condicion, $coti->id_condicions, ['class' => 'form-control' . ($errors->has('id_condicions') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_condicions', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <br>
    <br>

    <tbody>
        <?php $costoTotal = 0;
        $costoigv = 0;
        $costoventa = 0;
        ?>
        @foreach($clientes as $clientes)
        @if (  $clientes->id_coti  == $clientess-> cod_cot)
        
        
        <?php $costoTotal += $clientes->precioneto; ?>
        <tr>
            <td>COSTO TOTAL</td>
            <td>
                {{$costoTotal}}</td>
        </tr>
        <?php $costoigv += $costoTotal*0.18; ?>
        <tr>
            <td>IGV</td>
            <td>{{$costoigv}}</td>
        </tr>
        <?php $costoventa += $costoTotal+$costoigv; ?>
        <tr>
            <td>PRECIO DE VENTA TOTAL</td>
            <td>{{$costoventa}}</td>
        </tr>









    <br>
    <br>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn bg-warning">Añadir</button>
    </div>
</div>