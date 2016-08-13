<?php

namespace Fabrica\Http\Requests;

use Fabrica\Http\Requests\Request;

class editarUsuarioRequest extends Request
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
            'nombre'=>'required|min:2|max:70',
            'correo'=>'required|unique:usuario|min:9|max:50',
            'departamento'=>'required|in:Sistemas,Informatica,Electronica',
            'cargo'=>'required|in:Administracion,Desarrollo,Investigacion',
            'tipo'=>'required',
            'area'=>'required',
            'path'=>'required|mimes:jpg,jpeg,png',
        ];
    }
}
