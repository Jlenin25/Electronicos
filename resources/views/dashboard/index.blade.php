@extends('layouts.template-crud')
@section('template_title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dashboard') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dashboards.create') }}" class="btn bg-warning btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Das</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dashboards as $dashboard)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dashboard->id_das }}</td>

                                            <td>
                                                <form action="{{ route('dashboards.destroy',$dashboard->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dashboards.show',$dashboard->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dashboards.edit',$dashboard->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $dashboards->links() !!}
            </div>
        </div>
    </div>
@endsection
