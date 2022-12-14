@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    Inventario
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <form method="GET" action="{{ route('inventary.share') }}">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="buscarI" placeholder="Buscar">
                                        <button class="btn btn-outline-primary input-group-text" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inventario.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Mostrar todo') }}
                                  </a>
&nbsp;                               
                                <a href="" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('PDF') }}
                                </a>
&nbsp;
                                <a href="{{ route('inventario.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo inventario') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Inventario</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th>Unidades</th>
										<th>Costo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventarios as $inventario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inventario->producto }}</td>
											<td>{{ $inventario->cantidad }}</td>
											<td>${{ $inventario->precio }} USD</td>
											<td>{{ $inventario->unidades }}</td>
											<td>${{ $inventario->costo }} USD</td>

                                            <td>
                                                <form action="{{ route('inventario.destroy',$inventario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inventario.show',$inventario->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inventario.edit',$inventario->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end">
                            {!! $inventarios->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
