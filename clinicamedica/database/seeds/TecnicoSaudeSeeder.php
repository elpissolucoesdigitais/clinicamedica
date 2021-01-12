<?php

use Illuminate\Database\Seeder;
use App\Models\TecnicoSaude;

class TecnicoSaudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(TecnicoSaude $tecnicoSaude)
    {

        $tecnicoSaude->create([
            'cpf'=>'044.678.632-02',
            'uf'=>'Roraima',
            'longradouro'=>'Nossa Senhora Aparecida',
            'bairro'=>'aparecida',
            'salario'=>2000.00,
            'cidade'=>'Boa Vista',
            'especialidade'=>'botox',
            'cep'=>'88556633',
            'contato'=>'98112-8822',
            'email'=>'amanda@hotmail.com',
            'foto'=>'tem foto 1',
            'complemento'=>'rua de esquina',
            'nome'=>'Amanda de Araujo',
            'rg'=>'885577',
            ]
        );


        $tecnicoSaude->create([
            'cpf'=>'033.543.876-05',
            'uf'=>'Amazonas',
            'longradouro'=>'Severino Mota',
            'bairro'=>'centro',
            'salario'=>3000.00,
            'cidade'=>'Manaus',
            'especialidade'=>'agulha',
            'cep'=>'774422',
            'contato'=>'98113-5599',
            'email'=>'tiago@hotmail.com',
            'foto'=>'tem foto 2',
            'complemento'=>'quadra grande',
            'nome'=>'tiago de Araujo',
            'rg'=>'996655',
            ]
        );


        
    }
}
