<?php

use Illuminate\Database\Seeder;
use App\Models\ReceitaFinanceira;

class ReceitaFinanceiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ReceitaFinanceira $receitaFinanceira)
    {
        $receitaFinanceira->create([
            'fk_consulta'=>3,
            'fk_administradora'=>1

            ]
        );

        $receitaFinanceira->create([
            'fk_consulta'=>4,
            'fk_administradora'=>2

            ]
        );

    }
}
