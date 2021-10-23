@extends('layouts.template-crud')
@section('title', 'Incidencias')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Incidencias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('incidencias.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
										<th>Incidencia</th>
										<th>Nombre</th>
										<th>Tipo</th>
										<th>Categoria</th>
										<th>Empresa</th>
										<th>Cliente</th>
										<th>Proveedor</th>
										<th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incidencias as $incidencia)
                                        <tr>
											<td>{{ $incidencia->id_inci }}</td>
											<td>{{ $incidencia->nombre }}</td>
											<td>{{ $incidencia->tipo }}</td>
											<td>{{ $incidencia->categoria }}</td>
											<td>{{ $incidencia->id_emp }}</td>
											<td>{{ $incidencia->id_clie }}</td>
											<td>{{ $incidencia->id_prov }}</td>
											<td>{{ $incidencia->id_estado }}</td>

                                            <td>
                                                <form action="{{ route('incidencias.destroy',$incidencia->id) }}" method="POST">
                                                    <a class="view" href="{{ route('incidencias.show',$incidencia->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('incidencias.edit',$incidencia->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $incidencias->links() !!}
            </div>
        </div>
    </div>
@endsection
