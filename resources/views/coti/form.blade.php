<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('id_cliente', $coti->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asignado') }}
            {{ Form::select('id_asignado', $coti, null, ['class' => 'form-control' . ($errors->has('id_asignado') ? ' is-invalid' : ''), 'placeholder' => 'Id Asignado']) }}
            {{-- <select name="id_cliente" id="">
                @foreach ($coti as $cot)
                <option value="{{ $coti->id_asignado }}">{{ $coti->name_asignado }}</option>
                @endforeach
            </select> --}}
            {{-- {{ Form::text('id_asignado', $coti->id_asignado, ['class' => 'form-control' . ($errors->has('id_asignado') ? ' is-invalid' : ''), 'placeholder' => 'Id Asignado']) }} --}}
            {!! $errors->first('id_asignado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expira') }}
            {{ Form::text('id_expira', $coti->id_expira, ['class' => 'form-control' . ($errors->has('id_expira') ? ' is-invalid' : ''), 'placeholder' => 'Id Expira']) }}
            {!! $errors->first('id_expira', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('moneda') }}
            {{ Form::text('id_moneda', $coti->id_moneda, ['class' => 'form-control' . ($errors->has('id_moneda') ? ' is-invalid' : ''), 'placeholder' => 'Id Moneda']) }}
            {!! $errors->first('id_moneda', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiempo de entrega') }}
            {{ Form::text('id_tiempoentrega', $coti->id_tiempoentrega, ['class' => 'form-control' . ($errors->has('id_tiempoentrega') ? ' is-invalid' : ''), 'placeholder' => 'Id Tiempoentrega']) }}
            {!! $errors->first('id_tiempoentrega', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('forma de pago') }}
            {{ Form::text('id_formapago', $coti->id_formapago, ['class' => 'form-control' . ($errors->has('id_formapago') ? ' is-invalid' : ''), 'placeholder' => 'Id Formapago']) }}
            {!! $errors->first('id_formapago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('id_estado', $coti->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('id_direccion', $coti->id_direccion, ['class' => 'form-control' . ($errors->has('id_direccion') ? ' is-invalid' : ''), 'placeholder' => 'Id Direccion']) }}
            {!! $errors->first('id_direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('condiciones generales') }}
            {{ Form::text('id_condiciones_generale', $coti->id_condiciones_generale, ['class' => 'form-control' . ($errors->has('id_condiciones_generale') ? ' is-invalid' : ''), 'placeholder' => 'Id Condiciones Generale']) }}
            {!! $errors->first('id_condiciones_generale', '<div class="invalid-feedback">:message</p>') !!}
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
