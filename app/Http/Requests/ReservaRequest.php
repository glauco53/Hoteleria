<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ //datos del usuario
            'nombre'    =>  'required|alpha|max:25',
            'apellido'  =>  'required|alpha|max:25',
            'identificacion'    =>  'required|alpha_num',
            'correo'    =>  'required|email',
            'telefono'  =>  'required|integer',
            //datos de la habitacion
        ];
    }
}
