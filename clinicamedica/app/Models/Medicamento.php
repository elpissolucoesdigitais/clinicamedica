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

}
