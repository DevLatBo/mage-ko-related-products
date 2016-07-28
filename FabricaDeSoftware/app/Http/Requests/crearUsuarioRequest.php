<?php

namespace Fabrica\Http\Requests;

use Fabrica\Http\Requests\Request;

class crearUsuarioRequest extends Request
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
            'nombre'=>'required',
            'correo'=>'required',
            'departamento'=>'required|in: Sistemas, Informatica, Electronoca',
            'cargo'=>'required|in: Administracion, Desarrollo, Investigacion',
        ];
    }
}
