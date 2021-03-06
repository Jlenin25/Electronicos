@extends('layouts.template-crud')
@section('title', 'Logística')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Logistica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('logisticas.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
										<th>Logística</th>
										<th>Empresa</th>
										<th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($logisticas as $logistica)
                                        <tr>
											<td>{{ $logistica->id_log }}</td>
											<td>{{ $logistica->id_emp }}</td>
											<td>{{ $logistica->id_estado }}</td>
                                            <td>
                                                <form action="{{ route('logisticas.destroy',$logistica->id) }}" method="POST">
                                                    <a class="view" href="{{ route('logisticas.show',$logistica->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('logisticas.edit',$logistica->id) }}"><i class="material-icons">&#xE254;</i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"><i class="material-icons">&#xE872;</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $logisticas->links() !!}
            </div>
        </div>
    </div>
@endsection
