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
                            <strong>Cliente:</strong>
                            {{ $coti->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Asignado:</strong>
                            {{ $coti->id_asignado }}
                        </div>
                        <div class="form-group">
                            <strong>Expira:</strong>
                            {{ $coti->expira->dias }}
                        </div>
                        <div class="form-group">
                            <strong>Moneda:</strong>
                            {{ $coti->moneda->monedas }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempoentrega:</strong>
                            {{ $coti->tiempoentrega->dias }}
                        </div>
                        <div class="form-group">
                            <strong>Formapago:</strong>
                            {{ $coti->formapago->pago }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $coti->estado->situacion }}
                        </div>
                        <div class="form-group">
                            <strong>Condiciones Generale:</strong>
                            {{ $coti->condicion->condicionesgenerales }}
                        </div>
                        <div class="form-group">
                            <strong>Piepagina:</strong>
                            {{ $coti->id_piepagina }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
