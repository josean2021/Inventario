@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    Create Inventario
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear nuevo inventario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inventario.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('inventario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
