@extends('layouts.template-crud')
@section('template_title')
Usuarios
@endsection
@section('content')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Usuarios</b></h2></div>
                    <div class="col-sm-4">
                        @can('users.create')
                        <div class="float-right">
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">Crear</a>
                        </div>
                        @endcan
                        <form>
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input name="buscador" type="text" class="form-control" placeholder="Buscar" value="{{ $buscador }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Estado</th>
                        <th>Correo</th>
                        <th>Cargo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->docu }}</td>
                        <td>{{ $user->estado }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles }}</td>
                        <td>
                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                <a class="view" title="View" data-toggle="tooltip" href="{{ route('users.show',$user->id) }}"><i class="material-icons">&#xE417;</i></a>
                                @can('users.edit')
                                <a class="edit" title="Edit" data-toggle="tooltip" href="{{ route('users.edit',$user->id) }}"><i class="material-icons">&#xE254;</i></a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                @can('users.delete')
                                <button type="submit" class="btn btn-danger btn-sm" title="delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $users->links() !!}
    </div>
</div>
@endsection
