@extends('layouts.template-crud')
@section('template_title')
    {{ $coti->name ?? 'Show Coti' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Coti</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cotis.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $coti->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $coti->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Id Expira:</strong>
                            {{ $coti->id_expira }}
                        </div>
                        <div class="form-group">
                            <strong>Id Moneda:</strong>
                            {{ $coti->id_moneda }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tiempoentrega:</strong>
                            {{ $coti->id_tiempoentrega }}
                        </div>
                        <div class="form-group">
                            <strong>Id Formapago:</strong>
                            {{ $coti->id_formapago }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estado:</strong>
                            {{ $coti->id_estado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Piepagina:</strong>
                            {{ $coti->id_piepagina }}
                        </div>
                        <div class="form-group">
                            <strong>Id Condicions:</strong>
                            {{ $coti->id_condicions }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
