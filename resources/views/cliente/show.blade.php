@extends('layouts.template-crud')
@section('title', 'Clientes')
<br>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista del Cliente: {{ $cliente->contacto }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn bg-warning btn-sm float-right" href="{{ route('clientes.index') }}">Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>RUC:</strong>
                            {{ $cliente->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular 1:</strong>
                            {{ $cliente->celular1 }}
                        </div>
                        <div class="form-group">
                            <strong>Email 1:</strong>
                            {{ $cliente->email1 }}
                        </div>
                        <div class="form-group">
                            <strong>Página Web:</strong>
                            {{ $cliente->paginaweb }}
                        </div>
                        <div class="form-group">
                            <strong>Estado cliente:</strong>
                            {{ $cliente->estadocliente->situacion }}
                        </div>
                        <div class="form-group">
                            <strong>Razón social:</strong>
                            {{ $cliente->razonsocial }}
                        </div>
                        <div class="form-group">
                            <strong>Contácto:</strong>
                            {{ $cliente->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Celular 2:</strong>
                            {{ $cliente->celular2 }}
                        </div>
                        <div class="form-group">
                            <strong>Email 2:</strong>
                            {{ $cliente->email2 }}
                        </div>
                        <div class="form-group">
                            <strong>Área:</strong>
                            {{ $cliente->area->derivado }}
                        </div>
                        <div class="form-group">
                            <strong>Asignado:</strong>
                            {{ $cliente->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
