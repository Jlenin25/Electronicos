@extends('layouts.app')

@section('template_title')
    {{ $piepagina->name ?? 'Show Piepagina' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Piepagina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('piepaginas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Piedepagina:</strong>
                            {{ $piepagina->cod_piedepagina }}
                        </div>
                        <div class="form-group">
                            <strong>Name Piedepagina:</strong>
                            {{ $piepagina->name_piedepagina }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
