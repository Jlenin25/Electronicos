@extends('layouts.template-crud')
@section('content')
@can('dashboard.create')
<a href="dashboard/create" class="btn btn-primary">CREAR</a>
@endcan
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID DASHBOARD</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dashboards as $dashboard)
        <tr>
            <td>{{$dashboard->id}}</td>
            <td>{{$dashboard->id_das}}</td>
            <td>
                <form action="{{route ('dashboard.destroy',$dashboard->id)}}" method="POST">
                    @can('dashboard.edit')
                    <a href="/dashboard/{{ $dashboard->id }}/edit" class="btn btn-info">Editar</a>
                    @endcan

                    @csrf
                    @method('DELETE')

                    @can('dashboard.delete')
                    <button type="submit" class="btn btn-danger">borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
