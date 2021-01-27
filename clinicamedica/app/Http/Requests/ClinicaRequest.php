<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicaRequest extends FormRequest
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
            
            'responsaveltecnico'=>'required|string',
            'numero'=>'required|numeric',
            'cidade'=>'required|string',
            'email'=>'required|email:rfc,dns',
            'complemento'=>'required|string',
            'nome'=>'required|string',
            'logradouro'=>'required|string',
            'contato'=>'required|numeric',
            'bairro'=>'required|string',
            'uf'=>'required|string',
            'cep'=>'required|numeric',
            'foto'=>'required',
            'cnpj'=>'required|numeric',
            'senha'=>'required'

        ];
    }
}
