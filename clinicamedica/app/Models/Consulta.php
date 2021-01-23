<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table='consultas';
    protected $fillable = ['hora','data','status','valor','cnpj','fk_procedimento','fk_medico'];

    //Retorna (1,1) procedimento
    public function relProcedimento()
    {
        return $this->hasOne('App\Models\Procedimento', 'id', 'fk_procedimento');
    }

    //Retorna (0,1) Exame
    public function relExame()
    {
        return $this->hasOne('App\Models\Exame', 'fk_consulta');
    }

}
