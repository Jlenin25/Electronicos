{{-- @extends('layouts.plantillabase'); --}}
@extends('layouts.template-crud')
@section('content')
@can('operaciones.create')
<br>
<a href="operaciones/create" class="btn btn-warning float-right">CREAR</a>
@endcan
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID OPERACIONES</th>
            <th scope="col">ID EMPRESA</th>
            <th scope="col">ID ESTADO</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($operaciones as $operacion)
        <tr>
            <td>{{$operacion->id}}</td>
            <td>{{$operacion->id_oper}}</td>
            <td>{{$operacion->id_emp}}</td>
            <td>{{$operacion->id_estado}}</td>
            <td>
                <form action="{{route ('operaciones.destroy',$operacion->id)}}" method="POST">
                    @can('operaciones.edit')
                    <a href="/operaciones/{{ $operacion->id }}/edit" class="btn btn-info">Editar</a>
                    @endcan

                    @csrf
                    @method('DELETE')

                    @can('operaciones.delete')
                    <button type="submit" class="btn btn-danger">borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
