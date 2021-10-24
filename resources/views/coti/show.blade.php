@extends('layouts.template-crud')
@section('title', 'Cotizaciones')
<br>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista de Cotización</span>
                        </div>
                        <div class="float-right">
                            <a class="btn bg-warning btn-sm float-right" href="{{ route('cotis.index') }}">Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $coti->cliente->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Asignado:</strong>
                            {{ $coti->user->name }}
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
                            <strong>Tiempo de entrega:</strong>
                            {{ $coti->tiempoentrega->dias}}
                        </div>
                        <div class="form-group">
                            <strong>Forma de pago:</strong>
                            {{ $coti->formapago->pago }}
                        </div>
                        <div class="form-group">
                            <strong>Estado de cotización:</strong>
                            {{ $coti->estado->situacion }}
                        </div>
                        <div class="form-group">
                            <strong>Pie de página:</strong>
                            {{ $coti->piepagina->piedepagina }}
                        </div>
                        <div class="form-group">
                            <strong>Condición:</strong>
                            {{ $coti->condicion->condicionesgenerales }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
