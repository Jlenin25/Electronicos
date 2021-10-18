@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA ASIGNADO</h2>

<form action="/asignado/{{$asignado->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">CODIGO ASIGNADO</label>
        <input id="cod_asignado" name="cod_asignado" type="text" class="form-control" value="{{$asignado->cod_asignado}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">NOMBRE ASIGNADO</label>
        <input id="name_asignado" name="name_asignado" type="text" class="form-control" value="{{$asignado->name_asignado}}">
    </div>
    <a href="/asignado" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection