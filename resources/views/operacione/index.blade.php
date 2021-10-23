@extends('layouts.template-crud')
@section('template_title')
    Operacione
@endsection
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Operaciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('operaciones.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
										<th>Operaciones</th>
										<th>Empresa</th>
										<th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($operaciones as $operacione)
                                        <tr>
											<td>{{ $operacione->id_oper }}</td>
											<td>{{ $operacione->id_emp }}</td>
											<td>{{ $operacione->id_estado }}</td>
                                            <td>
                                                <form action="{{ route('operaciones.destroy',$operacione->id) }}" method="POST">
                                                    <a class="view" href="{{ route('operaciones.show',$operacione->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('operaciones.edit',$operacione->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $operaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
