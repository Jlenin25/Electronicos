@extends('layouts.template-crud')
@section('title', 'Área')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Área') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('areas.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
										<th>Derivado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($areas as $area)
                                        <tr>
											<td>{{ $area->derivado }}</td>
                                            <td>
                                                <form action="{{ route('areas.destroy',$area->id) }}" method="POST">
                                                    <a class="view" href="{{ route('areas.show',$area->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('areas.edit',$area->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $areas->links() !!}
            </div>
        </div>
    </div>
@endsection
