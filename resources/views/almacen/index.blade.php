@extends('layouts.template-crud')
@section('title', 'Almacén')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Almacén') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('almacens.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
										<th>Codigo</th>
										<th>Producto</th>
										<th>Imagen</th>
										<th>Descripcion</th>
										<th>Stock Minimo</th>
										<th>Stock Maximo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($almacens as $almacen)
                                        <tr>
											<td>{{ $almacen->codigo }}</td>
											<td>{{ $almacen->producto }}</td>
											<td>{{ $almacen->imagen }}</td>
											<td>{{ $almacen->descripcion }}</td>
											<td>{{ $almacen->stock_minimo }}</td>
											<td>{{ $almacen->stock_maximo }}</td>
                                            <td>
                                                <form action="{{ route('almacens.destroy',$almacen->id) }}" method="POST">
                                                    <a class="view" href="{{ route('almacens.show',$almacen->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('almacens.edit',$almacen->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $almacens->links() !!}
            </div>
        </div>
    </div>
@endsection
