<?php

use Illuminate\Database\Seeder;
use App\Models\Relatorio;

class RelatorioPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Relatorio $relatorioPaciente)
    {
        $relatorioPaciente->create([
            'nome'=>'Evolução do Paciente',
            'descricao'=>'Andamento de Hoje',
            'fk_medicamento'=>1,
            'fk_medico'=>1,
            'fk_tecnico_saude'=>1,
            'fk_exame'=>2

            ]
        );

        $relatorioPaciente->create([
            'nome'=>'Histórico do Paciente',
            'descricao'=>'Medicamentos já tomados e exames feitos',
            'fk_medicamento'=>2,
            'fk_medico'=>2,
            'fk_tecnico_saude'=>2,
            'fk_exame'=>1

            ]
        );

    }
}
