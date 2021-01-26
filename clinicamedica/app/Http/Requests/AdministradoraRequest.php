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
            'cpf'=>'required|numeric|min:11|max:11',
            'rg'=>'required|numeric|min:10|max:10',
            'nome'=>'required|string',
            'longradouro'=>'required|string',
            'contato'=>'required|numeric|min:10|max:10',
            'bairro'=>'required|string',
            'uf'=>'required|string',
            'cep'=>'required|numeric|min:5|max:5',
            'datanascimento'=>'required',
            'foto'=>'required',
            'salario'=>'required|numeric',
            'senha'=>'required'
            
        ];
    }
}
