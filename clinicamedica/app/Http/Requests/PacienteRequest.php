<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            
            'sexo'=>'required|string',
            'cidade'=>'required|string',
            'email'=>'required|email:rfc,dns',
            'complemento'=>'required|string',

            'cpf'=>'required|numeric',
            'cpf'=>'required|min:11|max:11',

            'rg'=>'required|numeric',
            'rg'=>'required|min:10|max:10',

            'nome'=>'required|string',
            'longradouro'=>'required|string',

            'contato'=>'required|numeric',
            'contato'=>'required|min:10|max:10',

            'bairro'=>'required|string',
            'uf'=>'required|string',

            'cep'=>'required|numeric',
            'cep'=>'required|min:5|max:5',

            'data_nascimento'=>'required',
            'foto'=>'required',
            'altura'=>'required|numeric',
            'pressao'=>'required|numeric',
            'numero'=>'required|numeric',
            'peso'=>'required|numeric',
            'nomepai'=>'required|string',
            'nomemae'=>'required|string',
            'fk_convenio'=>'required|string',

            'senha'=>'required'

        ];
    }
}
