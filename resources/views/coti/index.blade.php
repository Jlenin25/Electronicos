@extends('layouts.template-crud')

@section('template_title')
    Coti
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Coti') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cotis.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Cliente</th>
										<th>Asignado</th>
										<th>Expira</th>
										<th>Moneda</th>
										<th>Tiempoentrega</th>
										<th>Formapago</th>
										<th>Estado</th>
										<th>Direccion</th>
										<th>Condiciones Generale</th>
										<th>Piepagina</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cotis as $coti)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $coti->id_cliente }}</td>
											<td>{{ $coti->id_asignado }}</td>
											<td>{{ $coti->id_expira }}</td>
											<td>{{ $coti->id_moneda }}</td>
											<td>{{ $coti->id_tiempoentrega }}</td>
											<td>{{ $coti->id_formapago }}</td>
											<td>{{ $coti->id_estado }}</td>
											<td>{{ $coti->id_direccion }}</td>
											<td>{{ $coti->id_condiciones_generale }}</td>
											<td>{{ $coti->id_piepagina }}</td>

                                            <td>
                                                <form action="{{ route('cotis.destroy',$coti->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cotis.show',$coti->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cotis.edit',$coti->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $cotis->links() !!}
            </div>
        </div>
    </div>
@endsection
