<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministradoraRequest extends FormRequest
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
            //OBS: Verificar a validação da Data de Nascimento, Foto, Senha e Salario
            
            'sexo'=>'required|string',
            'cidade'=>'required|string',
            'email'=>'required|email:rfc,dns',
            'complemento'=>'required|string',
            'cpf'=>'required|numeric',
            'rg'=>'required|numeric',
            'nome'=>'required|string',
            'longradouro'=>'required|string',
            'contato'=>'required|numeric',
            'bairro'=>'required|string',
            'uf'=>'required|string',
            'cep'=>'required|numeric',
            'datanascimento'=>'required',
            'foto'=>'required',
            'salario'=>'required|numeric',
            'senha'=>'required'
            
        ];
    }
}
