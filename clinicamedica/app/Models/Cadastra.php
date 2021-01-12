<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastra extends Model
{
    protected $table='cadastros';
    protected $fillable = ['fk_paciente','fk_secretaria','fk_administradora'];
}

