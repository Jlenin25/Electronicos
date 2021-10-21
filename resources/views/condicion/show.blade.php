@extends('layouts.template-crud')
@section('template_title')
    {{ $condicion->name ?? 'Show Condicion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Condicion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('condicions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Condicionesgenerales:</strong>
                            {{ $condicion->condicionesgenerales }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
