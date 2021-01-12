<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceitaFinanceira extends Model
{
    protected $fillable=['fk_consulta', 'fk_administradora'];

}
