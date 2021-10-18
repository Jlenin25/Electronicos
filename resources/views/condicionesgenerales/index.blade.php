{{-- @extends('layouts.plantillabase'); --}}
@extends('layouts.template-crud')
@section('content')

<a href="condicionesgenerales/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO CONDICIONES GENERALES</th>
            <th scope="col">NOMBRE CONDICIONES GENERALES</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($condicionesgenerales as $condicionesgenerales)
        <tr>
            <td>{{$condicionesgenerales->id}}</td>
            <td>{{$condicionesgenerales->cod_condicionesgenerales}}</td>
            <td>{{$condicionesgenerales->name_condicionesgenerales}}</td>
            <td>
                <form action="{{route ('condicionesgenerales.destroy',$condicionesgenerales->id)}}" method="POST">
                    
                    <a href="/condicionesgenerales/{{ $condicionesgenerales->id }}/edit" class="btn btn-info">Editar</a>
                    

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
