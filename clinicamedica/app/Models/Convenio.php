<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table='convenios';
    protected $fillable = ['status','nome','descricao','validade','cnpj','email','contato','valor'];

    //OBS: NÃO TEM MAIS NENHUMA MASCARA PARA COLOCAR

    //Retorna (0,N) Paciente
    public function relPaciente()
    {
        return $this->hasMany('App\Models\Paciente', 'fk_convenio');
    }


    //OK - CERTO
    public function getContatoAttribute()
    {
        //(95) 8112-4455
        $contato=$this->attributes['contato'];
        $contato=str_replace('(', '', $contato);
        $contato=str_replace(')', '', $contato);
        $contato=str_replace('-', '', $contato);
        $contato=str_replace(' ', '', $contato);

        return "(" . substr($contato, 0, 2) . ") " . substr($contato, 2, 4) . "-". substr($contato, -4);

    }

    //OK - CERTO
    public function getCnpjAttribute()
    {
        //88.555.777/0001-22
        $cnpj=$this->attributes['cnpj'];
        $cnpj=str_replace('.', '', $cnpj);
        $cnpj=str_replace('/', '', $cnpj);
        $cnpj=str_replace('-', '', $cnpj);

        return substr($cnpj, 0, 2). ".". substr($cnpj, 2, 3). ".". substr($cnpj, 5, 3). "/". substr($cnpj, 8, 4). "-". substr($cnpj, 12, 2);

    }


}
