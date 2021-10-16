@extends('adminlte::page')
@section('title', 'Roles')
@section('content_header')
    @can('roles.create')
    <a href="{{route('roles.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo Rol</a>
    @endcan
    <h1>Lista de  roles</h1>
@stop
@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="10px">
                                @can('roles.edit')
                                <a href="{{route('roles.edit', $role)}}" class="btn btn-sm btn-primary">Editar</a>
                                @endcan
                            </td>

                            <td width="10px">
                                <form action="{{route('roles.destroy', $role)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @can('roles.destroy')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop
