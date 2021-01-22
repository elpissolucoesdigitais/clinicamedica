<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $table='secretarias';
    protected $fillable=['sexo', 'cidade', 'email', 'complemento', 'cpf', 'rg', 'nome', 'longradouro', 'contato', 'bairro', 'uf', 'cep', 'datanascimento', 'foto', 'salario','fk_clinica'];


    public function getCpfAttribute()
    {
        $cpf=$this->attributes['cpf'];

        return substr($cpf, 0, 3). '.' .substr($cpf, 3, 3). '.' .substr($cpf, 7, 3). '-' .substr($cpf, -2);
    }


    public function getContatoAttribute()
    {
        $contato=$this->attributes['contato'];

        return "(" . substr($contato, 0, 2) . ") " . substr($contato, 2, 4) . "-". substr($contato, -4);

    }

    public function getCepAttribute()
    {
        $cep=$this->attributes['cep'];

        return substr($cep, 0, 5). "-". substr($cep, -3);

    }

    public function getRgAttribute()
    {
        $rg=$this->attributes['rg'];

        return substr($rg, 0, 3). '.' .substr($rg, 3, 3). '.' .substr($rg, 7, 3). '-' .substr($rg, -2);

    }
    
}
