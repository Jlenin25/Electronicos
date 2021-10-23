@extends('layouts.template-crud')
@section('template_title')
    Operacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Operacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('operaciones.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
                                <thead class="thead bg-warning">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Oper</th>
										<th>Id Emp</th>
										<th>Id Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($operaciones as $operacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $operacione->id_oper }}</td>
											<td>{{ $operacione->id_emp }}</td>
											<td>{{ $operacione->id_estado }}</td>

                                            <td>
                                                <form action="{{ route('operaciones.destroy',$operacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('operaciones.show',$operacione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('operaciones.edit',$operacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $operaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
