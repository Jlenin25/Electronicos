@extends('layouts.template-crud')
@section('template_title')
    Update Coti
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Coti</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cotis.update', $coti->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('coti.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
