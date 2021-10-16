@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA INCIDENCIA</h2>

<form action="/incidencia/{{$incidencia->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">ID Inci</label>
        <input id="id_inci" name="id_inci" type="text" class="form-control" value="{{$incidencia->id_inci}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$incidencia->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" value="{{$incidencia->tipo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <input id="categoria" name="categoria" type="text" class="form-control" value="{{$incidencia->categoria}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID Emp</label>
        <input id="id_emp" name="id_emp" type="text" class="form-control" value="{{$incidencia->id_emp}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID Clie</label>
        <input id="id_clie" name="id_clie" type="text" class="form-control" value="{{$incidencia->id_clie}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID Prov</label>
        <input id="id_prov" name="id_prov" type="text" class="form-control" value="{{$incidencia->id_prov}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID ESTADO</label>
        <input id="id_estado" name="id_estado" type="text" class="form-control" value="{{$incidencia->id_estado}}">
    </div>
    <a href="/incidencia" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection