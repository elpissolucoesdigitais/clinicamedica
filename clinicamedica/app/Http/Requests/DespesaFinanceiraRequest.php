<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DespesaFinanceiraRequest extends FormRequest
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
            
            'fk_medico'=>'required|string',
            'fk_tecnico_saude'=>'required|string',
            'fk_clinica'=>'required|string',
            'fk_secretaria'=>'required|string',
            'fk_estoque'=>'required|string',
            'tipo'=>'required|string'

        ];
    }
}
