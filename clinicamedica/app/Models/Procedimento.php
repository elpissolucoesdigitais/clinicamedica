<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model
{
    protected $table='procedimentos';
    protected $fillable = ['descricao','valor','nome','fk_secretaria'];

    //Retorna (0,N) Consulta
    public function relConsulta()
    {
        return $this->hasMany('App\Models\Consulta', 'fk_procedimento');
    }

    //Retorna (1,1) Secretaria
    public function relSecretaria()
    {
        return $this->hasOne('App\Models\Secretaria', 'id', 'fk_secretaria');
    }

    //Retorna (1,N) ProcedimentoMedico
    public function relProcedimentoMedico()
    {
        return $this->hasMany('App\Models\ProcedimentoMedico', 'fk_procedimento');
    }

    //Retorna (1,N) ProcedimentoTecnico
    public function relProcedimentoTecnico()
    {
        return $this->hasMany('App\Models\ProcedimentoTecnico', 'fk_procedimento');
    }

}
