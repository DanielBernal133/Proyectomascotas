<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
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
        "nombre" =>'required|unique:Producto,nombreProducto' ,
        "descripcion"=>'required',
          "cantidad" =>'required|alpha_num',
          "precio"=>'required|alpha_num|max:10',
          "categoria" =>'required' ,
          "marca" =>'required'


    ];
}

public function messages(){
    return[
     'required'=>"Campo requerido",
     'unique'=>"este nombre ya esta siendo utilizado",
     'alpha'=>'Este campo solicita letras',
     'alpha_num'=>"Este campo es de caracter numerico",
     'max'=>"se permiten :max caracteres"
    ];
}

}
