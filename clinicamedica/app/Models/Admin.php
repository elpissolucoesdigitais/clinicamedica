<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admins';
    protected $fillable = ['sexo','cidade','email','complemento','salario','cpf','rg','nome','longradouro','contato','bairro','uf','cep','datanascimento','foto','crm'];
}