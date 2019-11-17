<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreMovement extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "type" => [
                "required",
                Rule::in(["Egreso", "Ingreso"])
            ],
            "movement_date" => "required|date",
            "category_id" => "required",
            "description" => "required|min:3|max:1000",
            "money_decimal" => "required|numeric|min:0.01",
            "image" => "image"

        ];
    }

    public function messages() {
        return [
            "type.required" => "El campo Tipo es requerido",
            "type.in" => "El valor del campo Tipo no es valido",
            "movement_date.required" => "El campo fecha es requerido",
            "movement_date.date" => "La fecha no es valida",
            "category_id.required" => "La categoria es obligatoria",
            "description.required" => "La descripcion es obligatoria",
            "description.min" => "La descripcion tener tres caracteres o mas",
            "description.max" => "La descripcion no puede tener mas de 1000 caracteres",
            "money_decimal.required" => "El monto es obligatorio",
            "money_decimal.numeric" => "El monto debe ser un numero",
            "money_decimal.min" => "El monto debe ser mayor a cero",
            "image.image" => "El archivo adjunto no es una imagen valida"
        ];
    }
}
