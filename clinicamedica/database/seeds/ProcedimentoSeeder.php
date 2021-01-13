<?php

use Illuminate\Database\Seeder;
use App\Models\Procedimento;

class ProcedimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Procedimento $procedimento)
    {
        $procedimento->create([
            'descricao'=>'melhorar postura',
            'valor'=>60.00,
            'nome'=>'RPG',
            'fk_secretaria'=>2

            ]
        );

        $procedimento->create([
            'descricao'=>'melhorar musculatura',
            'valor'=>70.00,
            'nome'=>'Pilates',
            'fk_secretaria'=>1

            ]
        );

    }
}
