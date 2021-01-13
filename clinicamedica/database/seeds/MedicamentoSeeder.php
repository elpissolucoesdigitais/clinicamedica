<?php

use Illuminate\Database\Seeder;
use App\Models\Medicamento;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Medicamento $medicamento)
    {
        $medicamento->create([
            'nome'=>'Azitromicina',
            'dose'=>'500 mg',
            'descricao'=>'frequentemente usada no tratamento de infecções respiratórias',
            'fk_medico'=>1

            ]
        );

        $medicamento->create([
            'nome'=>'Aztreonam',
            'dose'=>'400 mg',
            'descricao'=>'deve ser administrado por injeção intramuscular profunda em grande massa muscular',
            'fk_medico'=>2

            ]
        );

    }
}
