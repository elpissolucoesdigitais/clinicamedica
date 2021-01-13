<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedimentoTecnico extends Model
{
    protected $table='procedimentos_tem_tecnicos';
    protected $fillable=['fk_tecnico_saude', 'fk_procedimento'];

}
