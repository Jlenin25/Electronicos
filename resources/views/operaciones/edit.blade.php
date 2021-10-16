@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA OPERACIONES</h2>

<form action="/operaciones/{{$operacion->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">ID OPERACIONES</label>
        <input id="id_oper" name="id_oper" type="text" class="form-control" value="{{$operacion->id_oper}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID EMPRESA</label>
        <input id="id_emp" name="id_emp" type="text" class="form-control" value="{{$operacion->id_emp}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID ESTADO</label>
        <input id="id_estado" name="id_estado" type="text" class="form-control" value="{{$operacion->id_estado}}">
    </div>
    <a href="/operaciones" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection