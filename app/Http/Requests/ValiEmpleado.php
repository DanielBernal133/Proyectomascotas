<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiEmpleado extends FormRequest
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
            "nombre" => 'required|alpha|max:10',
            "telefono"=> 'required|numeric',
            "estado"=> 'required|numeric',
            "usuario"=> 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'required' => "Este campo es REQUERIDO",
            'alpha' => "Solo se pueden poner letras",
            'numeric' => "Solo se pueden poner numeros",
        ];
    }
}
