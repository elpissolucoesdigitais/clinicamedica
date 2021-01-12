<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedimentoMedico extends Model
{
    protected $table='procedimentos_tem_medicos';
    protected $fillable = ['fk_procedimento','fk_medico'];
}
