<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table='estoques';
    protected $fillable=['nome', 'descricao', 'quantidade', 'tipo', 'valor', 'fk_administradora'];
    
}
