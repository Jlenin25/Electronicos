@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA ESTADO</h2>

<form action="/direccion/{{$direccion->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">CODIGO DIRECCION</label>
        <input id="cod_direccion" name="cod_direccion" type="text" class="form-control" value="{{$direccion->cod_direccion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">NOMBRE DIRECCION</label>
        <input id="name_direccion" name="name_direccion" type="text" class="form-control" value="{{$direccion->name_direccion}}">
    </div>
    <a href="/direccion" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection