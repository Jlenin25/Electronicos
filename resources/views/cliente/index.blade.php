@extends('layouts.template-crud')
@section('template_title')
    Cliente
@endsection

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
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Ruc</th>
										<th>Direccion</th>
										<th>Celular1</th>
										<th>Email1</th>
										<th>Paginaweb</th>
										<th>Id Estadocliente</th>
										<th>Razonsocial</th>
										<th>Contacto</th>
										<th>Celular2</th>
										<th>Email2</th>
										<th>Id Area</th>
										<th>Id User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
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
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
