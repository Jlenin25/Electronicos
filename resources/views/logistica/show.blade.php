@extends('layouts.template-crud')
@section('template_title')
    {{ $logistica->name ?? 'Show Logistica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Logistica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('logisticas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Log:</strong>
                            {{ $logistica->id_log }}
                        </div>
                        <div class="form-group">
                            <strong>Id Emp:</strong>
                            {{ $logistica->id_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado:</strong>
                            {{ $logistica->id_estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
