@extends('layouts.template-crud')
@section('template_title')
Actualizar Usuario
@endsection
@section('content')

    @if (session('Info'))
        <div class="alert alert-success">
            <strong>{{session('Info')}}</strong>
        </div>
    @endif

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('user.form-edit')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
