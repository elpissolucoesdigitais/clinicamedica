<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table='estoques';
    protected $fillable=['nome', 'descricao', 'quantidade', 'tipo', 'valor', 'fk_administradora'];

    //Retorna (1,N) Despesa Financeira
    public function relDespesaFinanceira()
    {
        return $this->hasMany('App\Models\DespesaFinanceira', 'fk_estoque');
    }

    //Retorna (1,1) Administradora
    public function relAdministradora()
    {
        return $this->hasOne('App\Models\Administradora', 'id', 'fk_administradora');
    }
    
}
