<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table='medicamentos';
    protected $fillable=['nome', 'dose', 'descricao', 'fk_medico'];


    //Retorna (0,N) Relatorio Paciente
    public function relRelatorio()
    {
        return $this->hasMany('App\Models\Relatorio', 'fk_medicamento');
    }

    //Retorna (1,1) Medico
    public function relMedico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'fk_medico');
    }

}
