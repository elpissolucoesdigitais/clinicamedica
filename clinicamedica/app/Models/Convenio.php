<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table='convenios';
    protected $fillable = ['status','nome','descricao','validade','cnpj','email','contato','valor'];

    


    public function getContatoAttribute()
    {
        $contato=$this->attributes['contato'];

        return "(" . substr($contato, 0, 2) . ") " . substr($contato, 2, 4) . "-". substr($contato, -4);

    }



}
