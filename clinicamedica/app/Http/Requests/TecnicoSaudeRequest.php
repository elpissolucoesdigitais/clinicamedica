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
            'uf'=>'required|string',
            'longradouro'=>'required|string',
            'bairro'=>'required|string',
            'salario'=>'required|numeric',
            'cidade'=>'required|string',
            'especialidade'=>'required|string',
            'cep'=>'required|numeric',
            'contato'=>'required|numeric',
            'email'=>'required|email:rfc,dns',
            'complemento'=>'required|string',
            'nome'=>'required|string',
            'rg'=>'required|numeric',
            'foto'=>'required',
            'senha'=>'required'

        ];
    }
}
