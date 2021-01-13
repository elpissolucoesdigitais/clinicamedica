<?php

use Illuminate\Database\Seeder;
use App\Models\Cadastra;

class CadastraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Cadastra $cadastra)
    {
        $cadastra->create([
            'fk_paciente'=>1,
            'fk_secretaria'=>1,
            'fk_administradora'=>2

            ]
        );

        $cadastra->create([
            'fk_paciente'=>2,
            'fk_secretaria'=>2,
            'fk_administradora'=>1

            ]
        );

    }
}
