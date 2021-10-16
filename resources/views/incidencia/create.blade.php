@extends('layouts.template-crud')
@section('content')
<h2>CREAR REGISTRO PARA INCIDENCIAS</h2>
<form action="/incidencia" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">ID Inci</label>
    <input id="id_inci" name="id_inci" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="tipo" name="tipo" type="text" class="form-control"  tabindex="3">
</div>
<div class="mb-3">
    <label for="" class="form-label">Categoria</label>
    <input id="categoria" name="categoria" type="text" class="form-control" tabindex="4">
</div>
<div class="mb-3">
    <label for="" class="form-label">ID Emp</label>
    <input id="id_emp" name="id_emp" type="text" class="form-control" tabindex="5">
</div>
<div class="mb-3">
    <label for="" class="form-label">ID Clie</label>
    <input id="id_clie" name="id_clie" type="text" class="form-control" tabindex="6">
</div>
<div class="mb-3">
    <label for="" class="form-label">ID PROV</label>
    <input id="id_prov" name="id_prov" type="text" class="form-control" tabindex="7">
</div>
<div class="mb-3">
    <label for="" class="form-label">ID ESTADO</label>
    <input id="id_estado" name="id_estado" type="text" class="form-control" tabindex="8">
</div>
<a href="/incidencia" class="btn btn-secondary" tabindex="9">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@endsection