@extends('layouts.template-crud')
@section('template_title')
    Proveedor
@endsection

@section('content')
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
@endsection
