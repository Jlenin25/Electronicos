@extends('layouts.template-crud')

@section('template_title')
    Update Asignado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Asignado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asignados.update', $asignado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('asignado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
