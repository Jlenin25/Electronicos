@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA PROVEEDOR</h2>

<form action="/proveedor/{{$proveedor->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Códido</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$proveedor->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Razon social</label>
        <input id="razon_social" name="razon_social" type="text" class="form-control" value="{{$proveedor->razon_social}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">RUC</label>
        <input id="ruc" name="ruc" type="number" class="form-control" value="{{$proveedor->ruc}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">DNI</label>
        <input id="dni" name="dni" type="number" class="form-control" value="{{$proveedor->dni}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre_prov" name="nombre_prov" type="text" class="form-control" value="{{$proveedor->nombre_prov}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellidos</label>
        <input id="apellido_prov" name="apellido_prov" type="text" class="form-control" value="{{$proveedor->apellido_prov}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Imagén</label>
        <input id="imagen" name="imagen" type="file" size="50" class="form-control" value="{{$proveedor->imagen}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="direccion_prov" name="direccion_prov" type="text" class="form-control" value="{{$proveedor->direccion_prov}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Celular</label>
        <input id="celular" name="celular" type="number" class="form-control" value="{{$proveedor->celular}}">
    </div>
    <a href="/proveedor" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection