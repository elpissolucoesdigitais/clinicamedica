<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedimentoMedico extends Model
{
    protected $table='procedimentos_tem_medicos';
    protected $fillable = ['fk_procedimento','fk_medico'];

    //Retorna (1,1) Procedimento
    public function relProcedimento()
    {
        return $this->hasOne('App\Models\Procedimento', 'id', 'fk_procedimento');
    }

    //Retorna (1,1) Medico
    public function relMedico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'fk_medico');
    }

}
