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
            'contato'=>'required|numeric',
            'foto'=>'required',
            'nome'=>'required|string',
            'rg'=>'required|numeric',
            'cpf'=>'required|numeric',
            'longradouro'=>'required|string',
            'uf	'=>'required|string',
            'datanascimento'=>'required',
            'crm'=>'required|numeric',
            'crmuf'=>'required|string',
            'especialidade'=>'required|string',
            'senha'=>'required'

        ];
    }
}
