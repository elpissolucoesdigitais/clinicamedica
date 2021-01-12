<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $fillable=['sexo', 'cidade', 'email', 'complemento', 'cpf', 'rg', 'nome', 'longradouro', 'contato', 'bairro', 'uf', 'cep', 'datanascimento', 'foto', 'salario', 'fk_clinica'];
    
}
