@extends('layouts.template-crud')
@section('content')
<h2>CREAR REGISTRO PARA DIRECCION</h2>
<form action="/direccion" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">CODIGO DIRECCION</label>
    <input id="cod_direccion" name="cod_direccion" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">NOMBRE DIRECCION</label>
    <input id="name_direccion" name="name_direccion" type="text" class="form-control" tabindex="2">
</div>
<a href="/direccion" class="btn btn-secondary" tabindex="3">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="2">Guardar</button>
</form>
@endsection