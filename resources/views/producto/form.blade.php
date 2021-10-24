<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio costo') }}
            {{ Form::text('preciocosto', $producto->preciocosto, ['class' => 'form-control' . ($errors->has('preciocosto') ? ' is-invalid' : ''), 'placeholder' => 'precio costo']) }}
            {!! $errors->first('preciocosto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disponibles') }}
            {{ Form::text('disponibles', $producto->disponibles, ['class' => 'form-control' . ($errors->has('disponibles') ? ' is-invalid' : ''), 'placeholder' => 'disponibles']) }}
            {!! $errors->first('disponibles', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fabricante') }}
            {{ Form::text('fabricante', $producto->fabricante, ['class' => 'form-control' . ($errors->has('fabricante') ? ' is-invalid' : ''), 'placeholder' => 'fabricante']) }}
            {!! $errors->first('fabricante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::select('id_categoria', $categoria, $producto->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio venta') }}
            {{ Form::text('precioventa', $producto->precioventa, ['class' => 'form-control' . ($errors->has('precioventa') ? ' is-invalid' : ''), 'placeholder' => 'precio venta']) }}
            {!! $errors->first('precioventa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proveedor') }}
            {{ Form::select('id_proveedor', $proveedor, $producto->id_proveedor, ['class' => 'form-control' . ($errors->has('id_proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('id_proveedor', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
