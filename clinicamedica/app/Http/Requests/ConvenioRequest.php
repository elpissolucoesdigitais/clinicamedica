<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvenioRequest extends FormRequest
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
            
            'status'=>'required|string',
            'email'=>'required|email:rfc,dns',
            'nome'=>'required|string',
            'contato'=>'required|numeric',
            'descricao'=>'required|string',
            'validade'=>'required',
            'cnpj'=>'required|numeric',
            'valor'=>'required|numeric',

        ];
    }
}
