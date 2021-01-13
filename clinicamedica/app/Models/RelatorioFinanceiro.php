<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelatorioFinanceiro extends Model
{
    protected $table='relatorios_financeiros';
    protected $fillable=['fk_despesa', 'fk_administradora'];

}
