@extends('layouts.template-crud')

@section('template_title')
    Editar Tiempo de entrega
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Tiempo de entrega</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tiempoentregas.update', $tiempoentrega->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tiempoentrega.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
