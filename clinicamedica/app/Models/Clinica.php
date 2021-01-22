<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $table='clinicas';
    protected $fillable=['responsaveltecnico', 'nome', 'logradouro', 'numero', 'cep', 'cidade', 'email', 'contato', 'foto', 'complemento', 'bairro', 'cnpj', 'uf'];
    
    //OBS: NÃO TEM MAIS NENHUMA MASCARA PARA COLOCAR

    //Retorna (1,N) Secretaria
    public function secretaria()
    {
        return $this->hasMany('App\Models\Secretaria', 'id', 'fk_clinica');
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
