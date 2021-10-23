{{-- @extends('layouts.plantillabase'); --}}
@extends('layouts.template-crud')
@section('content')
<br>
<a href="direccion/create" class="btn btn-warning float-right">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead class='bg-warning'>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO DIRECCION</th>
            <th scope="col">NOMBRE DIRECCION</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($direccions as $direccion)
        <tr>
            <td>{{$direccion->id}}</td>
            <td>{{$direccion->cod_direccion}}</td>
            <td>{{$direccion->name_direccion}}</td>
            <td>
                <form action="{{route ('direccion.destroy',$direccion->id)}}" method="POST">
                    
                    <a href="/direccion/{{ $direccion->id }}/edit" class="btn btn-info">Editar</a>
                    

                    @csrf
                    @method('DELETE')

                   
                    <button type="submit" class="btn btn-danger">borrar</button>
                    
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
