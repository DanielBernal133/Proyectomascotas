<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'email'=> 'required|email|exists:usuario,email',
            'password'=> 'required|confirmed',
            'name'=> 'required|alpha|',
            'apellido'=> 'required|alpha|',
            'checkboxes'=>'required',


        ];
    }
}
