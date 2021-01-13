<?php

use Illuminate\Database\Seeder;
use App\Models\DespesaFinanceira;

class DespesaFinanceiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(DespesaFinanceira $despesaFinanceira)
    {
        $despesaFinanceira->create([
            'fk_medico'=>2,
            'fk_tecnico_saude'=>1,
            'fk_clinica'=>1,
            'fk_secretaria'=>2,
            'fk_estoque'=>2,
            'tipo'=>'estrutural'

        ]);

        $despesaFinanceira->create([
            'fk_medico'=>1,
            'fk_tecnico_saude'=>2,
            'fk_clinica'=>2,
            'fk_secretaria'=>1,
            'fk_estoque'=>1,
            'tipo'=>'temporal'

        ]);

    }
}
