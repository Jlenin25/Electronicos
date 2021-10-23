@extends('layouts.template-crud')
@section('template_title')
    {{ $proveedor->name ?? 'Show Proveedor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $proveedor->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedor->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular1:</strong>
                            {{ $proveedor->celular1 }}
                        </div>
                        <div class="form-group">
                            <strong>Email1:</strong>
                            {{ $proveedor->email1 }}
                        </div>
                        <div class="form-group">
                            <strong>Paginaweb:</strong>
                            {{ $proveedor->paginaweb }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estadocliente:</strong>
                            {{ $proveedor->id_estadocliente }}
                        </div>
                        <div class="form-group">
                            <strong>Razonsocial:</strong>
                            {{ $proveedor->razonsocial }}
                        </div>
                        <div class="form-group">
                            <strong>Contaco:</strong>
                            {{ $proveedor->contaco }}
                        </div>
                        <div class="form-group">
                            <strong>Celular2:</strong>
                            {{ $proveedor->celular2 }}
                        </div>
                        <div class="form-group">
                            <strong>Email2:</strong>
                            {{ $proveedor->email2 }}
                        </div>
                        <div class="form-group">
                            <strong>Id Area:</strong>
                            {{ $proveedor->id_area }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $proveedor->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
