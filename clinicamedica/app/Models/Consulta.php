<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table='consultas';
    protected $fillable = ['hora','data','status','valor','cnpjfk_procedimento','fk_medico'];
}
