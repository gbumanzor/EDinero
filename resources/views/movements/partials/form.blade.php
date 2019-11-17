<div class="form-group">
    {!! Form::label("movement_date", "Fecha del Movimiento") !!}

    {!! Form::date("movement_date",
        ($movement->movement_date) ? $movement->movement_date->format("Y-m-d") : date("Y-m-d"),
        [
            "required",
            "class" => $errors->has('movement_date') ? 'form-control is-invalid' : 'form-control'
        ]
    ) !!}

    @if($errors->has("movement_date"))
        <span class="invalid-feedback">
            <b>{{ $errors->first("movement_date") }}</b>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label("type", "Tipo") !!}

    {!! Form::select("type",
        ["Egreso" => "Egreso", "Ingreso" => "Ingreso"],
        null,
        [
            "required",
            "class" => $errors->has('type') ? 'form-control is-invalid' : 'form-control'
        ]
    ) !!}

    @if($errors->has("type"))
        <span class="invalid-feedback">
            <b>{{ $errors->first("type") }}</b>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label("category_id", "Categoria") !!}

    {!! Form::select("category_id",
        $categories,
        null,
        [
            "required",
            "class" => $errors->has('catetgory_id') ? 'form-control is-invalid' : 'form-control'
        ]
    ) !!}
    @if($errors->has("category_id"))
        <span class="invalid-feedback">
            <b>{{ $errors->first("category_id") }}</b>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label("description","Descripcion") !!}

    {!! Form::textarea("description",
        null,
        [
            "required",
            "placeholder" => "Descripcion",
            "autocomplete" => "off",
            "maxlength" => 1000,
            "class" => $errors->has('description') ? 'form-control is-invalid' : 'form-control'
        ]
    ) !!}

    @if($errors->has("description"))
        <span class="invalid-feedback">
            <b>{{ $errors->first("description") }}</b>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label("money_decimal", "Monto") !!}

    {!! Form::number("money_decimal",
        null,
        [
            "required",
            "placeholder" => "Monto",
            "min" => 0.00,
            "step" => 0.01,
            "class" => $errors->has('money_decimal') ? 'form-control is-invalid' : 'form-control'
        ]
    ) !!}

    @if($errors->has("money_decimal"))
        <span class="invalid-feedback">
            <b>{{ $errors->first("money_decimal") }}</b>
        </span>
    @endif
</div>

<div class="form-group">
    {!! Form::label("image", "Imagen") !!}

    {!! Form::file("image",
        [
            "class" => $errors->has('image') ? 'form-control-file is-invalid' : 'form-control-file'
        ]
    ) !!}

    @if($errors->has("image"))
        <span class="invalid-feedback">
            <b>{{ $errors->first("image") }}</b>
        </span>
    @endif
</div>

<div class="form-group">
    <button type="Submit" class="btn btn-primary">Guardar</button>
</div>


@section("scripts")
<script>
    jQuery(function($) {
        $("#category_id").select2({
            placeholder: "Seleccione una categoria",
            tags: true,
            tokenSeparators: [',']
        });
    });
</script>
@endsection
