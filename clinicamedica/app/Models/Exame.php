<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    protected $fillable=['descricao', 'nome', 'fk_paciente', 'fk_consulta'];

}
