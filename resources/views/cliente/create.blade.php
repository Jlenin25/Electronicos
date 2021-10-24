@extends('layouts.template-crud')
@section('title', 'Clientes')
<br>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Cliente</span>
                        <div class="float-right">
                            <a class="btn bg-warning btn-sm float-right" href="{{ route('clientes.index') }}">Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('cliente.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
