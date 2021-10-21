<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('id_cliente', $coti->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asignado') }}
            <select name="" id="">
                @foreach ($asignado as $a)
                <option value="">{{ $a->name_asignado }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('expira') }}
            <select name="" id="">
                @foreach ($expira as $ex)
                <option value="">{{ $ex->dias }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('moneda') }}
            <select name="" id="">
                @foreach ($moneda as $m)
                <option value="">{{ $m->monedas }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('tiempo de entrega') }}
            <select name="" id="">
                @foreach ($tiempoentrega as $t)
                <option value="">{{ $t->dias }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('forma de pago') }}
            <select name="" id="">
                @foreach ($pago as $p)
                <option value="">{{ $p->pago }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            <select name="" id="">
                @foreach ($estado as $e)
                <option value="">{{ $e->situacion }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('condiciones generales') }}
            {{ Form::text('id_condicions', $coti->id_condicions, ['class' => 'form-control' . ($errors->has('id_condicions') ? ' is-invalid' : ''), 'placeholder' => 'Id Condiciones Generales']) }}
            {!! $errors->first('id_condicions', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pie de pagina') }}
            {{ Form::text('id_piepagina', $coti->id_piepagina, ['class' => 'form-control' . ($errors->has('id_piepagina') ? ' is-invalid' : ''), 'placeholder' => 'Id Piepagina']) }}
            {!! $errors->first('id_piepagina', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
