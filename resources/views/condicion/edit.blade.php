@extends('layouts.template-crud')
@section('template_title')
    Editar Condicion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Condicion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('condicions.update', $condicion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('condicion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
