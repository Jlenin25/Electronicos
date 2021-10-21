@extends('layouts.template-crud')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $cliente->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular1:</strong>
                            {{ $cliente->celular1 }}
                        </div>
                        <div class="form-group">
                            <strong>Email1:</strong>
                            {{ $cliente->email1 }}
                        </div>
                        <div class="form-group">
                            <strong>Paginaweb:</strong>
                            {{ $cliente->paginaweb }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $cliente->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Razonsocial:</strong>
                            {{ $cliente->razonsocial }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $cliente->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Celular2:</strong>
                            {{ $cliente->celular2 }}
                        </div>
                        <div class="form-group">
                            <strong>Email2:</strong>
                            {{ $cliente->email2 }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $cliente->area }}
                        </div>
                        <div class="form-group">
                            <strong>Asignado:</strong>
                            {{ $cliente->asignado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
