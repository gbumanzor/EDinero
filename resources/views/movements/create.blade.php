@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Registrar Movimiento</h3>
                        {!! Form::model(
                            $movement = new \App\Movement(["money" => 0.00]),
                            [
                                "route" => "movements.store",
                                "files" => "true"
                            ]
                        ) !!}

                            @include("movements.partials.form")

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
