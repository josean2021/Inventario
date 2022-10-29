@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('producto.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $producto->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo:</strong>
                            {{ $producto->tiempo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $producto->categorium->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Inventario:</strong>
                            {{ $producto->inventario->producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
