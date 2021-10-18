@extends('layouts.template-crud')
@section('content')
<h2>EDITAR REGISTRO PARA CONDICIONES GENERALES</h2>

<form action="/condicionesgenerales/{{$condicionesgenerales->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">CODIGO CONDICIONES GENERALES</label>
        <input id="cod_condicionesgenerales" name="cod_condicionesgenerales" type="text" class="form-control" value="{{$condicionesgenerales->cod_condicionesgenerales}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">NOMBRE CONDICIONES GENERALES</label>
        <input id="name_condicionesgenerales" name="name_condicionesgenerales" type="text" class="form-control" value="{{$condicionesgenerales->name_condicionesgenerales}}">
    </div>
    <a href="/condicionesgenerales" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection