<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TecnicoSaudeRequest extends FormRequest
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
            
            //OBS: Falta fazer o REQUEST de ADMIN

            'cpf'=>'required|numeric',
            'cpf'=>'required|min:11|max:11',

            'uf'=>'required|string',
            'longradouro'=>'required|string',
            'bairro'=>'required|string',
            'salario'=>'required|numeric',
            'cidade'=>'required|string',
            'especialidade'=>'required|string',

            'cep'=>'required|numeric',
            'cep'=>'required|min:5|max:5',

            'contato'=>'required|numeric',
            'contato'=>'required|min:10|max:10',

            'email'=>'required|email:rfc,dns',
            'complemento'=>'required|string',
            'nome'=>'required|string',

            'rg'=>'required|numeric',
            'rg'=>'required|min:10|max:10',

            'foto'=>'required',
            'senha'=>'required'

        ];
    }
}
