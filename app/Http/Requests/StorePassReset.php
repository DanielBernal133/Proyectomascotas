<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePassReset extends FormRequest
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
            "email"=>'required|email|exists:users,email',
            "password"=>'required|confirmed',
            "password_confirmation"=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required'=>"Campo requerido",
            'email'=>"Debe ser formato email",
            'exists'=>"Correo no registrado",
            'confirmed'=>"Las contraseñas tienen que coincidir"
        ];
    }
}
