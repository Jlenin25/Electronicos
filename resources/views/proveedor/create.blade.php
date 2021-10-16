@extends('layouts.template-crud')
@section('content')
<h2>CREAR REGISTRO PARA PROVEEDOR</h2>
<form action="/proveedor" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Razon social</label>
    <input id="razon_social" name="razon_social" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
    <label for="" class="form-label">RUC</label>
    <input id="ruc" name="ruc" type="number" class="form-control"  tabindex="3">
</div>
<div class="mb-3">
    <label for="" class="form-label">DNI</label>
    <input id="dni" name="dni" type="number" class="form-control" tabindex="4">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre_prov" name="nombre_prov" type="text" class="form-control" tabindex="5">
</div>
<div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellido_prov" name="apellido_prov" type="text" class="form-control" tabindex="6">
</div>
<div class="mb-3">
    <label for="" class="form-label">Imagén</label>
    <input id="imagen" name="imagen" type="file" size="50" class="form-control" tabindex="7">
</div>
<div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input id="direccion_prov" name="direccion_prov" type="text" class="form-control" tabindex="8">
</div>
<div class="mb-3">
    <label for="" class="form-label">Celular</label>
    <input id="celular" name="celular" type="number" class="form-control" tabindex="9">
</div>
<a href="/proveedor" class="btn btn-secondary" tabindex="7">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@endsection