<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCliente extends FormRequest
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
            "nombre"=>'required|alpha|max:10',
            "apellido"=>'required|alpha|max:20',
            "direccion"=>'required|max:30|unique:cliente,direccionCliente',
            "telefono"=>'required|numeric|min:7|unique:cliente,telefonoCliente'
        ];
    }
    public function messages()
    {
        return [
            'required'=>"*Campo requerido*",
            'numeric'=>"Solo números",
            'alpha'=>"Solo letras",
            'email'=>"Debe ser formato email",
            'min'=>"Solo se permiten :min caracteres",
            'unique'=>"Esta dirección/teléfono ya está siendo usado"

        ];
    }
}
