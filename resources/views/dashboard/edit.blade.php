@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA DASHBOARd</h2>

<form action="/dashboard/{{$dashboard->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">ID DASHBOARD</label>
        <input id="id_das" name="id_das" type="text" class="form-control" value="{{$dashboard->id_das}}">
    </div>
    <a href="/dashboard" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection