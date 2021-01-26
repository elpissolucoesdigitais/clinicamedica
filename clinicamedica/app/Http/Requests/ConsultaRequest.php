<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaRequest extends FormRequest
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
            
            //OBS: Verificar Hora, Data

            'hora'=>'required',
            'data'=>'required',
            'status'=>'required|string',
            'valor'=>'required|numeric',
            'fk_procedimento'=>'required|string',
            'fk_medico'=>'required|string',

        ];
    }
}
