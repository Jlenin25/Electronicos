@extends('layouts.template-crud')
@section('template_title')
    {{ $almacen->name ?? 'Show Almacen' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Almacen</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('almacens.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $almacen->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $almacen->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $almacen->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $almacen->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Stock Minimo:</strong>
                            {{ $almacen->stock_minimo }}
                        </div>
                        <div class="form-group">
                            <strong>Stock Maximo:</strong>
                            {{ $almacen->stock_maximo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
