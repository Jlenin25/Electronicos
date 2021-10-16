@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA ALMACEN</h2>

<form action="/almacen/{{$almacen->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Códido</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$almacen->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Producto</label>
        <input id="producto" name="producto" type="text" class="form-control" value="{{$almacen->producto}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Imagén</label>
        <input id="imagen" name="imagen" type="file" size="50" class="form-control" value="{{$almacen->imagen}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$almacen->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Stock Minímo</label>
        <input id="stock_minimo" name="stock_minimo" type="number" class="form-control" value="{{$almacen->stock_minimo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Stock Maxímo</label>
        <input id="stock_maximo" name="stock_maximo" type="number" class="form-control" value="{{$almacen->stock_maximo}}">
    </div>
    <a href="/almacen" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection