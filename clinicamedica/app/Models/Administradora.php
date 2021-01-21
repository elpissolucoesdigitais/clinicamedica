<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administradora extends Model
{
    protected $table='administradoras';
    protected $fillable=['sexo', 'cidade', 'email', 'complemento', 'salario', 'cpf', 'rg', 'nome', 'longradouro', 'contato', 'bairro', 'uf', 'cep', 'datanascimento', 'foto'];
    
    public function getContatoAttribute(){
        return "contato";
    }
}
