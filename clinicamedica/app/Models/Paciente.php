<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table='pacientes';
    protected $fillable = ['altura','pressao','numero','uf','peso','nome','longradouro','sexo','cpf','rg','data_nascimento','cidade','contato','bairro','cep','email','foto','nomepai','nomemae','complemento','fk_convenio'];
}
