@extends('layouts.template-crud')
@section('template_title')
    Incidencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Incidencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('incidencias.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Inci</th>
										<th>Nombre</th>
										<th>Tipo</th>
										<th>Categoria</th>
										<th>Id Emp</th>
										<th>Id Clie</th>
										<th>Id Prov</th>
										<th>Id Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incidencias as $incidencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
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
                                                    <a class="btn btn-sm btn-primary " href="{{ route('incidencias.show',$incidencia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('incidencias.edit',$incidencia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $incidencias->links() !!}
            </div>
        </div>
    </div>
@endsection
