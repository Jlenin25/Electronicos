@extends('layouts.template-crud')
@section('content')
<h2>CREAR REGISTRO PARA ALMACEN</h2>
<form action="/almacen" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Producto</label>
    <input id="producto" name="producto" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
    <label for="" class="form-label">Imagén</label>
    <input id="imagen" name="imagen" type="file" class="form-control" size="50" tabindex="3">
</div>
<div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4">
</div>
<div class="mb-3">
    <label for="" class="form-label">Stock Minímo</label>
    <input id="stock_minimo" name="stock_minimo" type="number" class="form-control" tabindex="5">
</div>
<div class="mb-3">
    <label for="" class="form-label">Stock Maxímo</label>
    <input id="stock_maximo" name="stock_maximo" type="number" class="form-control" tabindex="6">
</div>
<a href="/almacen" class="btn btn-secondary" tabindex="7">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@endsection