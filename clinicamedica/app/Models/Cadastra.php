<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastra extends Model
{
    protected $table='cadastros';
    protected $fillable = ['fk_paciente','fk_secretaria','fk_administradora'];

    //Retorna (0,1) Paciente
    public function relPaciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'fk_paciente');
    }

    //Retorna (1,1) Secretaria
    public function relSecretaria()
    {
        return $this->hasOne('App\Models\Secretaria', 'id', 'fk_secretaria');
    }

    //Retorna (1,1) Administradora
    public function relAdministradora()
    {
        return $this->hasOne('App\Models\Administradora', 'id', 'fk_administradora');
    }

}

