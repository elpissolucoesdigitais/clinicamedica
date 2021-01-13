<?php

use Illuminate\Database\Seeder;
use App\Models\ProcedimentoTecnico;

class ProcedimentoTecnicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ProcedimentoTecnico $procedimentoTecnico)
    {
        $procedimentoTecnico->create([
            'fk_tecnico_saude'=>2,
            'fk_procedimento'=>2

            ]
        );

        $procedimentoTecnico->create([
            'fk_tecnico_saude'=>1,
            'fk_procedimento'=>1

            ]
        );

    }
}
