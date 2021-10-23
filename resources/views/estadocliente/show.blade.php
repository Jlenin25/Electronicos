@extends('layouts.template-crud')
@section('template_title')
    {{ $estadocliente->name ?? 'Show Estadocliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estadocliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estadoclientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Situacion:</strong>
                            {{ $estadocliente->situacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
