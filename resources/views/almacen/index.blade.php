@extends('layouts.template-crud')
@section('content')
@can('almacen.create')
<br>
<a href="almacen/create" class="btn btn-warning float-right">CREAR</a>
@endcan
<table class="table table-dark table-striped mt-4">
    <thead class="bg-warning">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Producto</th>
            <th scope="col">Imagén</th>
            <th scope="col">Descripción</th>
            <th scope="col">Stock Minimo</th>
            <th scope="col">Stock Maximo</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($almacens as $almacen)
        <tr>
            <td>{{$almacen->id}}</td>
            <td>{{$almacen->codigo}}</td>
            <td>{{$almacen->producto}}</td>
            <td>{{$almacen->imagen}}</td>
            <td>{{$almacen->descripcion}}</td>
            <td>{{$almacen->stock_minimo}}</td>
            <td>{{$almacen->stock_maximo}}</td>
            <td>
                <form action="{{route ('almacen.destroy',$almacen->id)}}" method="POST">
                    @can('almacen.edit')
                    <a href="/almacen/{{ $almacen->id }}/edit" class="btn btn-info">Editar</a>
                    @endcan

                    @csrf
                    @method('DELETE')

                    @can('almacen.delete')
                    <button type="submit" class="btn btn-danger">borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
