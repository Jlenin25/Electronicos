@extends('layouts.template-crud')
@section('template_title')
    Producto
@endsection
<br>
@section('content')
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                @can('productos.create')
                                <a href="{{ route('productos.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">

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

                    <div class="card-body" >
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead bg-warning">
                                    <tr>
										<th>Nombre</th>
                                        <th>Imagen</th>
										<th>Precio</th>
										<th>Detalle</th>
										<th>Cantidad</th>
										<th>Descripcion</th>
										<th>Stock</th>
                                        <th>Proveedor</th>
										<th>Categoría</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
											<td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->imagen }}</td>
											<td>{{ $producto->precio }}</td>
											<td>{{ $producto->detalle }}</td>
											<td>{{ $producto->cantidad }}</td>
											<td>{{ $producto->descripcion }}</td>
											<td>{{ $producto->stock }}</td>
                                            <td>{{ $producto->proveedor->contaco }}</td>
											<td>{{ $producto->categoria->nombre }}</td>
                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a style="background-color:transparent; border:none; margin:0; padding:0" class="view" href="{{ route('productos.show',$producto->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    @can('productos.edit')
                                                    <a style="background-color:transparent; border:none; margin:0; padding:0" class="edit" href="{{ route('productos.edit',$producto->id) }}"><i class="material-icons">&#xE254;</i></a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('productos.delete')
                                                    <button type="submit" style="background-color:transparent; border:none; margin:0; padding:0" class="btn btn-danger btn-sm"><i class="material-icons">&#xE872;</i></button>
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
