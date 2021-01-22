<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    protected $table='relatorios_pacientes';
    protected $fillable = ['nome','descricao','fk_medicamento','fk_medico','fk_tecnico_saude','fk_exame'];


    //Retorna (1,1) Medico
    public function relMedico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'fk_medico');
    }

}
