@extends('layouts.template-crud')

@section('template_title')
    Update Expira
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Expira</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('expiras.update', $expira->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('expira.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
