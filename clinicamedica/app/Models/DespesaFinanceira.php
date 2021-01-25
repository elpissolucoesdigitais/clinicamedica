<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DespesaFinanceira extends Model
{
    protected $table='despesas_financeiras';
    protected $fillable=['fk_medico', 'fk_tecnico_saude', 'fk_clinica', 'fk_secretaria', 'fk_estoque', 'tipo'];

    //OBS: TENDO PROBLEMA PARA APARECER A PAGINA

    //Retorna (1,1) Medico
    public function relMedico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'fk_medico');
    }

    //Retorna (1,1) TecnicoSaude
    public function relTecnicoSaude()
    {
        return $this->hasOne('App\Models\TecnicoSaude', 'id', 'fk_tecnico_saude');
    }

    //Retorna (1,1) Clinica
    public function relClinica()
    {
        return $this->hasOne('App\Models\Clinica', 'id', 'fk_clinica');
    }

    //Retorna (1,1) Secretaria
    public function relSecretaria()
    {
        return $this->hasOne('App\Models\Secretaria', 'id', 'fk_secretaria');
    }

    //Retorna (0,1) Estoque
    public function relEstoque()
    {
        return $this->hasOne('App\Models\Estoque', 'id', 'fk_estoque');
    }

    //Retorna (1,N) RelatorioFinanceiro
    public function relRelatorioFinanceiro()
    {
        return $this->hasMany('App\Models\RelatorioFinanceiro', 'fk_despesa');
    }

}
