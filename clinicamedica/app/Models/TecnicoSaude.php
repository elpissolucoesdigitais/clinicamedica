<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TecnicoSaude extends Model
{
    protected $table='tecnicos_saude';
    protected $fillable = ['cpf','uf','longradouro','bairro','salario','especialidade','cep','contato','email','foto','complemento','nome','rg'];
}
