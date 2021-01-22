<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $table='clinicas';
    protected $fillable=['responsaveltecnico', 'nome', 'logradouro', 'numero', 'cep', 'cidade', 'email', 'contato', 'foto', 'complemento', 'bairro', 'cnpj', 'uf'];
    


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


}
