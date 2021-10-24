@extends('layouts.template-crud')
@section('title', 'Cotizaciones')
<br>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Cotización</span>
                        <div class="float-right">
                            <a class="btn bg-warning btn-sm float-right" href="{{ route('cotis.index') }}">Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cotis.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('coti.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
