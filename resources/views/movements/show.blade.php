@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Detalles del movimiento {{ $movement->id }}</h3>

                        <table class="table table-bordered">
                            <tr>
                                <th>Tipo</th>
                                <td>{{ $movement->type }}</td>
                            </tr>
                            <tr>
                                <th>Fecha</th>
                                <td>{{ $movement->movement_date->format("d/m/Y") }}</td>
                            </tr>
                            <tr>
                                <th>Categoria</th>
                                <td>{{ $movement->category->name }}</td>
                            </tr>
                            <tr>
                                <th>Cantidad</th>
                                <td>$ {{ number_format($movement->money_decimal,2) }}</td>
                            </tr>
                            <tr>
                                <th>Descripcion</th>
                                <td>{{ $movement->description }}</td>
                            </tr>
                        </table>
                        @if($movement->image)
                            <a href="{{ asset($movement->image) }}" target="_blank">
                                <img src="{{ asset($movement->image) }}" alt="Imagen" class="thumbnail">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
