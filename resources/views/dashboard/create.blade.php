@extends('layouts.template-crud')
@section('content')
<h2>CREAR REGISTRO PARA DASHBOARD</h2>
<form action="/dashboard" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">ID DASHBOARD</label>
    <input id="id_das" name="id_das" type="text" class="form-control" tabindex="1">
</div>
<a href="/dashboard" class="btn btn-secondary" tabindex="2">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="1">Guardar</button>
</form>
@endsection