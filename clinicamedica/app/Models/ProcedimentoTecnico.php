<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedimentoTecnico extends Model
{
    protected $table='procedimentos_tem_tecnicos';
    protected $fillable=['fk_tecnico_saude', 'fk_procedimento'];

    //Retorna (1,1) Tecnico Saude
    public function relTecnicoSaude()
    {
        return $this->hasOne('App\Models\TecnicoSaude', 'id', 'fk_tecnico_saude');
    }

    //Retorna (1,1) Procedimento
    public function relProcedimento()
    {
        return $this->hasOne('App\Models\Procedimento', 'id', 'fk_procedimento');
    }

}
