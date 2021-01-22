<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table='medicos';
    protected $fillable = ['sexo','cidade','email','complemento','cpf','rg','nome','longradouro','contato','bairro','uf','cep','datanascimento','foto','crm','crmuf','especialidade','salario'];

    //OBS: NÃO TEM MAIS NENHUMA MASCARA PARA COLOCAR

    //OK - CERTO
    public function getCpfAttribute()
    {
        //999.777.555-66
        $cpf=$this->attributes['cpf'];
        $cpf=str_replace('.', '', $cpf);
        $cpf=str_replace('-', '', $cpf);
        $cpf=str_replace(' ', '', $cpf);

        return substr($cpf, 0, 3). '.' .substr($cpf, 3, 3). '.' .substr($cpf, 6, 3). '-' .substr($cpf, -2);
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
    public function getCepAttribute()
    {
        //44556-999
        $cep=$this->attributes['cep'];
        $cep=str_replace('-', '', $cep);

        return substr($cep, 0, 5). "-". substr($cep, -3);

    }

    //OK - CERTO
    public function getRgAttribute()
    {
        //09.666.777-11
        $rg=$this->attributes['rg'];
        $rg=str_replace('.', '', $rg);
        $rg=str_replace('-', '', $rg);

        return substr($rg, 0, 2). '.' .substr($rg, 2, 3). '.' .substr($rg, 5, 3). '-' .substr($rg, -2);

    }

    //OK - CERTO
    public function getCrmUfAttribute()
    {
        //44445555-1/BR
        $crmuf=$this->attributes['crmuf'];
        $crmuf=str_replace('-', '', $crmuf);
        $crmuf=str_replace('/', '', $crmuf);

        return substr($crmuf, 0, 8). '-'.substr($crmuf, 8, 1). "/".substr($crmuf, -2);

    }


}
