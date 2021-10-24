@extends('layouts.template-crud')
@section('title', 'Estado - Clientes')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estado - clientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estadoclientes.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
										<th>Situacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estadoclientes as $estadocliente)
                                        <tr>
											<td>{{ $estadocliente->situacion }}</td>
                                            <td>
                                                <form action="{{ route('estadoclientes.destroy',$estadocliente->id) }}" method="POST">
                                                    <a class="view" href="{{ route('estadoclientes.show',$estadocliente->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('estadoclientes.edit',$estadocliente->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $estadoclientes->links() !!}
            </div>
        </div>
    </div>
@endsection
