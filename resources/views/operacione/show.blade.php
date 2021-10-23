@extends('layouts.template-crud')
@section('template_title')
    {{ $operacione->name ?? 'Show Operacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Operacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('operaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Oper:</strong>
                            {{ $operacione->id_oper }}
                        </div>
                        <div class="form-group">
                            <strong>Id Emp:</strong>
                            {{ $operacione->id_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado:</strong>
                            {{ $operacione->id_estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
