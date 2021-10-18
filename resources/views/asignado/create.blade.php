@extends('layouts.template-crud')
@section('content')
<h2>CREAR REGISTRO PARA ASIGNADO</h2>
<form action="/asignado" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">CODIGO ASIGNADO</label>
    <input id="cod_asignado" name="cod_asignado" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">NOMBRE ASIGNADO</label>
    <input id="name_asignado" name="name_asignado" type="text" class="form-control" tabindex="2">
</div>
<a href="/asignado" class="btn btn-secondary" tabindex="3">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="2">Guardar</button>
</form>
@endsection