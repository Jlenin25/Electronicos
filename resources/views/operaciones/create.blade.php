@extends('layouts.template-crud')
@section('content')
<h2>CREAR REGISTRO PARA OPERACIONES</h2>
<form action="/operaciones" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">ID OPERACIONES</label>
    <input id="id_oper" name="id_oper" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">ID EMPRESA</label>
    <input id="id_emp" name="id_emp" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
    <label for="" class="form-label">ID ESTADO</label>
    <input id="id_estado" name="id_estado" type="text" class="form-control"  tabindex="3">
</div>
<a href="/operaciones" class="btn btn-secondary" tabindex="4">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>
@endsection