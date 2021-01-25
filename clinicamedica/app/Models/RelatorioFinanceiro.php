<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelatorioFinanceiro extends Model
{
    protected $table='relatorios_financeiros';
    protected $fillable=['fk_despesa', 'fk_administradora'];

    //Retorna (1,1) DespesaFinanceira
    public function relDespesaFinanceira()
    {
        return $this->hasOne('App\Models\DespesaFinanceira', 'id', 'fk_despesa');
    }

    //Retorna (1,1) Administradora
    public function relAdministradora()
    {
        return $this->hasOne('App\Models\Administradora', 'id', 'fk_administradora');
    }

}
