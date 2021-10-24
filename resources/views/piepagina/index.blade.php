@extends('layouts.template-crud')
@section('title', 'Pie de página')
<br>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pie de página') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('piepaginas.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
										<th>Pie de pagina</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($piepaginas as $piepagina)
                                        <tr>
											<td>{{ $piepagina->piedepagina }}</td>
                                            <td>
                                                <form action="{{ route('piepaginas.destroy',$piepagina->id) }}" method="POST">
                                                    <a class="view" href="{{ route('piepaginas.show',$piepagina->id) }}"><i class="material-icons">&#xE417;</i></a>
                                                    <a class="edit" href="{{ route('piepaginas.edit',$piepagina->id) }}"><i class="material-icons">&#xE254;</i></a>
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
                {!! $piepaginas->links() !!}
            </div>
        </div>
    </div>
@endsection
