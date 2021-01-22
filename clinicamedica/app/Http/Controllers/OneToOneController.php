<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secretaria;
use App\Models\Clinica;

class OneToOneController extends Controller
{
    
    public function oneToOne()
    {

        $secretaria=Secretaria::find(1);

        echo $secretaria->nome;

        $clinica=$secretaria->relClinica;

        echo $clinica->nome;

    }

}
