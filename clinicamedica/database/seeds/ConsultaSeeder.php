<?php

use Illuminate\Database\Seeder;
use App\Models\Consulta;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Consulta $consulta)
    {
        $consulta->create([
            'hora'=>'15:00',
            'data'=>'2021-02-25',
            'status'=>'ativo',
            'valor'=>40.00,
            'fk_procedimento'=>1,
            'fk_medico'=>2

            ]
        );

        $consulta->create([
            'hora'=>'10:00',
            'data'=>'2021-03-02',
            'status'=>'ativo',
            'valor'=>30.00,
            'fk_procedimento'=>2,
            'fk_medico'=>1

            ]
        );

    }
}
