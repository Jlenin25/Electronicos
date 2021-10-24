@extends('layouts.template-crud')
@section('title', 'Forma de pago')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Forma de pago') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('formapagos.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
										<th>Forma de Pago</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formapagos as $formapago)
                                        <tr>
											<td>{{ $formapago->pago }}</td>
                                            <td>
                                                <form action="{{ route('formapagos.destroy',$formapago->id) }}" method="POST">
                                                    <a class="view" href="{{ route('formapagos.show',$formapago->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('formapagos.edit',$formapago->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $formapagos->links() !!}
            </div>
        </div>
    </div>
@endsection
