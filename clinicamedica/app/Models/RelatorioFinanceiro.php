<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelatorioFinanceiro extends Model
{
    protected $fillable=['fk_despesa', 'fk_administradora'];

}
