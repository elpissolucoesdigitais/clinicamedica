<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table='convenios';
    protected $fillable = ['status','nome','descricao','validade','cnpj','email','contato','valor'];
}
