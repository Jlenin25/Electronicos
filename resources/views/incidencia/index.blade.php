@extends('layouts.template-crud')
@section('content')
@can('incidencias.create')
<br>
<a href="incidencia/create" class="btn btn-warning float-right">CREAR</a>
@endcan
<table class="table table-dark table-striped mt-4">
    <thead class="bn-warning">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Inci</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Categoria</th>
            <th scope="col">ID Emp</th>
            <th scope="col">ID Clie</th>
            <th scope="col">ID PROV</th>
            <th scope="col">ID ESTADO</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($incidencias as $incidencia)
        <tr>
            <td>{{$incidencia->id}}</td>
            <td>{{$incidencia->id_inci}}</td>
            <td>{{$incidencia->nombre}}</td>
            <td>{{$incidencia->tipo}}</td>
            <td>{{$incidencia->categoria}}</td>
            <td>{{$incidencia->id_emp}}</td>
            <td>{{$incidencia->id_clie}}</td>
            <td>{{$incidencia->id_prov}}</td>
            <td>{{$incidencia->id_estado}}</td>
            <td>
                <form action="{{route ('incidencia.destroy',$incidencia->id)}}" method="POST">
                    @can('incidencias.edit')
                    <a href="/incidencia/{{ $incidencia->id }}/edit" class="btn btn-info">Editar</a>
                    @endcan

                    @csrf
                    @method('DELETE')

                    @can('incidencias.delete')
                    <button type="submit" class="btn btn-danger">borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
