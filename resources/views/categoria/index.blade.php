@extends('layouts.template-crud')
@section('template_title')
    Categorías
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
                                {{ __('Categorías') }}
                            </span>
                             <div class="float-right">
                                @can('categorias.create')
                                <a href="{{ route('categorias.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
                                    {{ __('Añadir') }}
                                  </a>
                                @endcan
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
										<th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
											<td>{{ $categoria->nombre }}</td>
                                            <td>
                                                <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">
                                                    <a class="view" href="{{ route('categorias.show',$categoria->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    @can('categorias.edit')
                                                    <a class="edit" href="{{ route('categorias.edit',$categoria->id) }}"><i class="material-icons">&#xE254;</i></a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')

                                                    @can('categorias.delete')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons">&#xE872;</i></button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $categorias->links() !!}
            </div>
        </div>
    </div>
@endsection
