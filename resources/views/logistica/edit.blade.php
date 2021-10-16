@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA LOGISTICA</h2>

<form action="/logistica/{{$logistica->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">ID LOGISTICA</label>
        <input id="id_log" name="id_log" type="text" class="form-control" value="{{$logistica->id_log}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID EMPRESA</label>
        <input id="id_emp" name="id_emp" type="text" class="form-control" value="{{$logistica->id_emp}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID ESTADO</label>
        <input id="id_estado" name="id_estado" type="text" class="form-control" value="{{$logistica->id_estado}}">
    </div>
    <a href="/logistica" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection