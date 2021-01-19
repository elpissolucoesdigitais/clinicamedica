<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table='consultas';
    protected $fillable = ['hora','data','status','valor','cnpj, fk_procedimento','fk_medico'];
}
