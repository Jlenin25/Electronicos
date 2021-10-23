@extends('layouts.template-crud')
@section('template_title')
    Update Formapago
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Formapago</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('formapagos.update', $formapago->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('formapago.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
