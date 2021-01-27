<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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

            //OBS: verificar a quantidade de Numeros em CRM
            
            'sexo'=>'required|string',
            'cidade'=>'required|string',
            'email'=>'required|email:rfc,dns',
            'bairro'=>'required|string',
            'salario'=>'required|numeric',
            'complemento'=>'required|string',

            'cep'=>'required|numeric',
            'cep'=>'required|min:5|max:5',

            'contato'=>'required|numeric',
            'contato'=>'required|min:10|max:10',

            'foto'=>'required',
            'nome'=>'required|string',

            'rg'=>'required|numeric',
            'rg'=>'required|min:10|max:10',

            'cpf'=>'required|numeric',
            'cpf'=>'required|min:11|max:11',

            'longradouro'=>'required|string',
            'uf	'=>'required|string',
            'datanascimento'=>'required',

            'crm'=>'required|numeric',
            'crm'=>'required|min:7|max:7',

            'crmuf'=>'required|string',
            'crmuf'=>'required|min:11|max:11',

            'especialidade'=>'required|string',

            'senha'=>'required'

        ];
    }
}
