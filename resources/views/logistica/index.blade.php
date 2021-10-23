@extends('layouts.template-crud')
@section('content')
@can('logistica.create')
<br>
<a href="logistica/create" class="btn btn-warning float-right">CREAR</a>
@endcan
<table class="table table-dark table-striped mt-4">
    <thead class="bg-warning">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID LOGISTICA</th>
            <th scope="col">ID EMPRESA</th>
            <th scope="col">ID ESTADO</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($logisticas as $logistica)
        <tr>
            <td>{{$logistica->id}}</td>
            <td>{{$logistica->id_log}}</td>
            <td>{{$logistica->id_emp}}</td>
            <td>{{$logistica->id_estado}}</td>
            <td>
                <form action="{{route ('logistica.destroy',$logistica->id)}}" method="POST">
                    @can('logistica.edit')
                    <a href="/logistica/{{ $logistica->id }}/edit" class="btn btn-info">Editar</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('logistica.delete')
                    <button type="submit" class="btn btn-danger">borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
