@extends('layouts.template-crud')
@section('title', 'Proveedores')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proveedors.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir') }}
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
										<th>Celular 1</th>
										<th>Email 1</th>
										<th>Pagina web</th>
										<th>Estado</th>
										<th>Razon social</th>
										<th>Contaco</th>
										<th>Celular 2</th>
										<th>Email 2</th>
										<th>Area</th>
										<th>Asignado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedors as $proveedor)
                                        <tr>
											<td>{{ $proveedor->ruc }}</td>
											<td>{{ $proveedor->direccion }}</td>
											<td>{{ $proveedor->celular1 }}</td>
											<td>{{ $proveedor->email1 }}</td>
											<td>{{ $proveedor->paginaweb }}</td>
											<td>{{ $proveedor->estadocliente->situacion }}</td>
											<td>{{ $proveedor->razonsocial }}</td>
											<td>{{ $proveedor->contaco }}</td>
											<td>{{ $proveedor->celular2 }}</td>
											<td>{{ $proveedor->email2 }}</td>
											<td>{{ $proveedor->area->derivado }}</td>
											<td>{{ $proveedor->user->name }}</td>
                                            <td>
                                                <form action="{{ route('proveedors.destroy',$proveedor->id) }}" method="POST">
                                                    <a class="view" href="{{ route('proveedors.show',$proveedor->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('proveedors.edit',$proveedor->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $proveedors->links() !!}
            </div>
        </div>
    </div>
@endsection
