<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceitaFinanceira extends Model
{
    protected $table='receitas_financeiras';
    protected $fillable=['fk_consulta', 'fk_administradora'];

    //Retorna (1,1) Consulta
    public function relConsulta()
    {
        return $this->hasOne('App\Models\Consulta', 'id', 'fk_consulta');
    }

    //Retorna (1,1) Administradora
    public function relAdministradora()
    {
        return $this->hasOne('App\Models\Administradora', 'id', 'fk_administradora');
    }

}
