<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    protected $table='exames';
    protected $fillable=['descricao', 'nome', 'fk_paciente', 'fk_consulta'];

    //Retorna (0,N) Relatorio Paciente
    public function relRelatorio()
    {
        return $this->hasMany('App\Models\Relatorio', 'fk_exame');
    }

    //Retorna (1,1) Paciente
    public function relPaciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'fk_paciente');
    }

    //Retorna (1,1) Consulta
    public function relConsulta()
    {
        return $this->hasOne('App\Models\Consulta', 'id', 'fk_consulta');
    }

}
