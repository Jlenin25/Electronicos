@extends('layouts.app')

@section('template_title')
    {{ $direccion->name ?? 'Show Direccion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Direccion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('direccions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $direccion->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
