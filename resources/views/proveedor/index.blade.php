@extends('layouts.template-crud')
@section('content')
    @can('proveedores.create')
<br>
    <a href="proveedor/create" class="btn btn-warning float-right">CREAR</a>
    @endcan
<table class="table table-dark table-striped mt-4">
    <thead class="bg-warning">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Razon social</th>
            <th scope="col">RUC</th>
            <th scope="col">DNI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Imagén</th>
            <th scope="col">Dirección</th>
            <th scope="col">Celular</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proveedors as $proveedor)
        <tr>
            <td>{{$proveedor->id}}</td>
            <td>{{$proveedor->codigo}}</td>
            <td>{{$proveedor->razon_social}}</td>
            <td>{{$proveedor->ruc}}</td>
            <td>{{$proveedor->dni}}</td>
            <td>{{$proveedor->nombre_prov}}</td>
            <td>{{$proveedor->apellido_prov	}}</td>
            <td>{{$proveedor->imagen}}</td>
            <td>{{$proveedor->direccion_prov}}</td>
            <td>{{$proveedor->celular}}</td>
            <td>
                <form action="{{route ('proveedor.destroy',$proveedor->id)}}" method="POST">
                    @can('proveedores.edit')
                        <a href="/proveedor/{{ $proveedor->id }}/edit" class="btn btn-info">Editar</a>
                    @endcan

                    @csrf
                    @method('DELETE')

                    @can('proveedores.delete')
                        <button type="submit" class="btn btn-danger">borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
