<?php

use Illuminate\Database\Seeder;
use App\Models\ProcedimentoMedico;

class ProcedimentoMedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ProcedimentoMedico $procedimentoMedico)
    {
        $procedimentoMedico->create([
            'fk_procedimento'=>1,
            'fk_medico'=>2

            ]
        );

        $procedimentoMedico->create([
            'fk_procedimento'=>2,
            'fk_medico'=>1

            ]
        );

    }
}
