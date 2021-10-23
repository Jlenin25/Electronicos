@extends('layouts.template-crud')
@section('template_title')
    {{ $incidencia->name ?? 'Show Incidencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Incidencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('incidencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Inci:</strong>
                            {{ $incidencia->id_inci }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $incidencia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $incidencia->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $incidencia->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Id Emp:</strong>
                            {{ $incidencia->id_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Id Clie:</strong>
                            {{ $incidencia->id_clie }}
                        </div>
                        <div class="form-group">
                            <strong>Id Prov:</strong>
                            {{ $incidencia->id_prov }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado:</strong>
                            {{ $incidencia->id_estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
