@extends('layouts.template-crud')
@section('title', 'Cotizaciones')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cotizaciones') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('cotis.pdf') }}" class="btn bg-warning btn-sm"  data-placement="left">
                                    {{ __('PDF') }}
                                </a>
&nbsp;
                             <div class="float-right">
                                <a href="{{ route('cotis.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
                            <table class="table table-hover" >
                                <thead class="thead bg-warning">
                                    <tr>
										<th>Cliente</th>
										<th>Asignado</th>
										<th>Expira</th>
										<th>Moneda</th>
										<th>Tiempoentrega</th>
										<th>Formapago</th>
										<th>Estado</th>
										<th>Piepagina</th>
										<th>Condiciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cotis as $coti)
                                        <tr>
											<td>{{ $coti->cliente->contacto }}</td>
											<td>{{ $coti->user->name }}</td>
											<td>{{ $coti->expira->dias }}</td>
											<td>{{ $coti->moneda->monedas }}</td>
											<td>{{ $coti->tiempoentrega->dias }}</td>
											<td>{{ $coti->formapago->pago }}</td>
											<td>{{ $coti->estado->situacion }}</td>
											<td>{{ $coti->piepagina->piedepagina }}</td>
											<td>{{ $coti->condicion->condicionesgenerales }}</td>
                                            <td>
                                                <form action="{{ route('cotis.destroy',$coti->id) }}" method="POST">
                                                    <a class="view" href="{{ route('cotis.show',$coti->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('cotis.edit',$coti->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $cotis->links() !!}
            </div>
        </div>
    </div>
@endsection
