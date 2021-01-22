<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administradora extends Model
{
    protected $table='administradoras';
    protected $fillable=['sexo', 'cidade', 'email', 'complemento', 'salario', 'cpf', 'rg', 'nome', 'longradouro', 'contato', 'bairro', 'uf', 'cep', 'datanascimento', 'foto'];
    
    //OK
    public function getCpfAttribute()
    {
        //$cpf=str_replace(".", "");
        

        $cpf=$this->attributes['cpf'];
        $cpf=str_replace('.', '', $cpf);
        $cpf=str_replace('-', '', $cpf);

        return substr($cpf, 0, 3). '.' .substr($cpf, 3, 3). '.' .substr($cpf, 7, 3). '-' .substr($cpf, -2);
    }

    //OK
    public function getContatoAttribute()
    {
        $contato=$this->attributes['contato'];

        return "(" . substr($contato, 0, 2) . ") " . substr($contato, 2, 4) . "-". substr($contato, -4);

    }

    //OK
    public function getCepAttribute()
    {
        $cep=$this->attributes['cep'];

        return substr($cep, 0, 5). "-". substr($cep, -3);

    }

    //OK
    public function getRgAttribute()
    {
        $rg=$this->attributes['rg'];

        return substr($rg, 0, 2). '.' .substr($rg, 2, 3). '.' .substr($rg, 7, 3). '-' .substr($rg, -2);

    }


}
