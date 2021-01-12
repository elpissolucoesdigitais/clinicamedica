<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    //
    protected $fillable=['responsaveltecnico', 'nome', 'logradouro', 'numero', 'cep', 'cidade', 'email', 'contato', 'foto', 'complemento', 'bairro', 'cnpj', 'uf'];
    

}
