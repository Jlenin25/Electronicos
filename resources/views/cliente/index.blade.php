@extends('layouts.template-crud')
@section('title', 'Clientes')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>
                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead bg-warning">
                                    <tr>
										<th>Ruc</th>
										<th>Direccion</th>
										<th>Celular1</th>
										<th>Email1</th>
										<th>Paginaweb</th>
										<th>Estado-cliente</th>
										<th>Razonsocial</th>
										<th>Contacto</th>
										<th>Celular2</th>
										<th>Email2</th>
										<th>Area</th>
										<th>User</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
											<td>{{ $cliente->ruc }}</td>
											<td>{{ $cliente->direccion }}</td>
											<td>{{ $cliente->celular1 }}</td>
											<td>{{ $cliente->email1 }}</td>
											<td>{{ $cliente->paginaweb }}</td>
											<td>{{ $cliente->estadocliente->situacion }}</td>
											<td>{{ $cliente->razonsocial }}</td>
											<td>{{ $cliente->contacto }}</td>
											<td>{{ $cliente->celular2 }}</td>
											<td>{{ $cliente->email2 }}</td>
											<td>{{ $cliente->area->derivado }}</td>
											<td>{{ $cliente->user->name }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="view" href="{{ route('clientes.show',$cliente->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('clientes.edit',$cliente->id) }}"><i class="material-icons">&#xE254;</i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons">&#xE872;</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
