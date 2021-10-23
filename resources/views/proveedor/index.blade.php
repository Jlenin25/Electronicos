@extends('layouts.template-crud')
@section('template_title')
    Proveedor
@endsection

@section('content')
<<<<<<< HEAD
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
=======
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proveedors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedors as $proveedor)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $proveedor->ruc }}</td>
											<td>{{ $proveedor->direccion }}</td>
											<td>{{ $proveedor->celular1 }}</td>
											<td>{{ $proveedor->email1 }}</td>
											<td>{{ $proveedor->paginaweb }}</td>
											<td>{{ $proveedor->id_estadocliente }}</td>
											<td>{{ $proveedor->razonsocial }}</td>
											<td>{{ $proveedor->contaco }}</td>
											<td>{{ $proveedor->celular2 }}</td>
											<td>{{ $proveedor->email2 }}</td>
											<td>{{ $proveedor->id_area }}</td>
											<td>{{ $proveedor->id_user }}</td>

                                            <td>
                                                <form action="{{ route('proveedors.destroy',$proveedor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proveedors.show',$proveedor->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proveedors.edit',$proveedor->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $proveedors->links() !!}
            </div>
        </div>
    </div>
>>>>>>> 1b9a7037ad78872a8a63c72cbca9500883fc66d5
@endsection
