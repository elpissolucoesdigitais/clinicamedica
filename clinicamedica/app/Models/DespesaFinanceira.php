<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DespesaFinanceira extends Model
{
    protected $table='despesas_financeiras';
    protected $fillable=['fk_medico', 'fk_tecnico_saude', 'fk_clinica', 'fk_secretaria', 'fk_estoque', 'tipo'];

}
