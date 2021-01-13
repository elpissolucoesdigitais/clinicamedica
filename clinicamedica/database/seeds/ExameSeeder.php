<?php

use Illuminate\Database\Seeder;
use App\Models\Exame;

class ExameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Exame $exame)
    {
        $exame->create([
            'descricao'=>'serve para os Cardiológicos',
            'nome'=>'eletrocardiograma',
            'fk_paciente'=>1,
            'fk_consulta'=>3

            ]
        );

        $exame->create([
            'descricao'=>'serve para os Radiológicos',
            'nome'=>'raios-X',
            'fk_paciente'=>2,
            'fk_consulta'=>4

            ]
        );

    }
}
