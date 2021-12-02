<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistroDatos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "direccion"=>'required|max:30|unique:cliente,direccionCliente',
            "telefono"=>'required|numeric|min:10|unique:cliente,telefonoCliente'
        ];
    }

    public function messages()
    {
        return [
            'required'=>"*Campo requerido*",
            'numeric'=>"Solo números",
            'alpha'=>"Solo letras",
            'min'=>"Solo se permiten :min caracteres",
            'unique'=>"Esta dirección/teléfono ya está siendo usado"

        ];
    }


}
