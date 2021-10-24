@extends('layouts.template-crud')
@section('title', 'Proveedores')
<br>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista del Proveedor: {{ $proveedor->contaco }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn bg-warning btn-sm float-right" href="{{ route('proveedors.index') }}">Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>RUC:</strong>
                            {{ $proveedor->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $proveedor->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular 1:</strong>
                            {{ $proveedor->celular1 }}
                        </div>
                        <div class="form-group">
                            <strong>Email 1:</strong>
                            {{ $proveedor->email1 }}
                        </div>
                        <div class="form-group">
                            <strong>Página Web:</strong>
                            {{ $proveedor->paginaweb }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Proveedor:</strong>
                            {{ $proveedor->estadocliente->situacion }}
                        </div>
                        <div class="form-group">
                            <strong>Razón social:</strong>
                            {{ $proveedor->razonsocial }}
                        </div>
                        <div class="form-group">
                            <strong>Contáco:</strong>
                            {{ $proveedor->contaco }}
                        </div>
                        <div class="form-group">
                            <strong>Celular 2:</strong>
                            {{ $proveedor->celular2 }}
                        </div>
                        <div class="form-group">
                            <strong>Email 2:</strong>
                            {{ $proveedor->email2 }}
                        </div>
                        <div class="form-group">
                            <strong>Área:</strong>
                            {{ $proveedor->area->derivado }}
                        </div>
                        <div class="form-group">
                            <strong>Asignado:</strong>
                            {{ $proveedor->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
