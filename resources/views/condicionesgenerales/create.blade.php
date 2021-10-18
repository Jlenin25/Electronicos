@extends('layouts.template-crud')
@section('content')
<h2>CREAR REGISTRO PARA CONDICIONES GENERALES</h2>
<form action="/condicionesgenerales" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">CODIGO CONDICIONES GENERALES</label>
    <input id="cod_condicionesgenerales" name="cod_condicionesgenerales" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">NOMBRE CONDICIONES GENERALES</label>
    <input id="name_condicionesgenerales" name="name_condicionesgenerales" type="text" class="form-control" tabindex="2">
</div>
<a href="/condicionesgenerales" class="btn btn-secondary" tabindex="3">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="2">Guardar</button>
</form>
@endsection