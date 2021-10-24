@extends('layouts.template-crud')
@section('title', 'Proveedores')
<br>
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Proveedor</span>
                        <div class="float-right">
                            <a class="btn bg-warning btn-sm float-right" href="{{ route('proveedors.index') }}">Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('proveedors.update', $proveedor->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('proveedor.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
