@extends('adminlte::page')

@section('title', '')

@section('content_header')
    <h1>Editar roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="">
        <div class="card-body">

            {!! Form::model($role, ['route' => ['roles.update',$role], 'method' => 'put']) !!}
                @include('roles.partials.form')

                {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop
