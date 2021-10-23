@extends('layouts.template-crud')
@section('template_title')
    Condicion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Condicion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('condicions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Nª</th>

										<th>Condiciones generales</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($condicions as $condicion)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $condicion->condicionesgenerales }}</td>

                                            <td>
                                                <form action="{{ route('condicions.destroy',$condicion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('condicions.show',$condicion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('condicions.edit',$condicion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $condicions->links() !!}
            </div>
        </div>
    </div>
@endsection
