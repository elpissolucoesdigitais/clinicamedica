<?php

use Illuminate\Database\Seeder;
use App\Models\RelatorioFinanceiro;

class RelatorioFinanceiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(RelatorioFinanceiro $relatorioFinanceiro)
    {
        
        $relatorioFinanceiro->create([
            'fk_despesa'=>2,
            'fk_administradora'=>1

            ]
        );

        $relatorioFinanceiro->create([
            'fk_despesa'=>1,
            'fk_administradora'=>2

            ]
        );
    }
}
