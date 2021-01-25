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

}
