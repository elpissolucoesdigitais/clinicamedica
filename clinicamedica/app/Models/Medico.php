<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table='medicos';
    protected $fillable = ['sexo','cidade','email','complemento','cpf','rg','nome','longradouro','contato','bairro','uf','cep','datanascimento','foto','crm','crmuf','especialidade','salario'];
}
