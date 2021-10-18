{{-- @extends('layouts.plantillabase'); --}}
@extends('layouts.template-crud')
@section('content')

<a href="asignado/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO ASIGNADO</th>
            <th scope="col">NOMBRE ASIGNADO</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($asignados as $asignado)
        <tr>
            <td>{{$asignado->id}}</td>
            <td>{{$asignado->cod_asignado}}</td>
            <td>{{$asignado->name_asignado}}</td>
            <td>
                <form action="{{route ('asignado.destroy',$asignado->id)}}" method="POST">
                    
                    <a href="/asignado/{{ $asignado->id }}/edit" class="btn btn-info">Editar</a>
                    

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
