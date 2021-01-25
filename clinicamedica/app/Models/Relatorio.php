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

    //Retorna (0,1) Exame
    public function relExame()
    {
        return $this->hasOne('App\Models\Exame', 'id', 'fk_exame');
    }

    //Retorna (0,1) Medicamento
    public function relMedicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'id', 'fk_medicamento');
    }

    //Retorna (1,1) TecnicoSaude
    public function relTecnicoSaude()
    {
        return $this->hasOne('App\Models\TecnicoSaude', 'id', 'fk_tecnico_saude');
    }


}
