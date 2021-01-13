<?php

use Illuminate\Database\Seeder;
use App\Models\Estoque;

class EstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Estoque $estoque)
    {
        $estoque->create([
            'nome'=>'Equipamento Fisioterapia',
            'descricao'=>'Bola para exercício',
            'quantidade'=>'5',
            'tipo'=>'ferramentas fisio',
            'valor'=>60.50,
            'fk_administradora'=>2

            ]
        );

        $estoque->create([
            'nome'=>'Equipamento Medico',
            'descricao'=>'Acessibilidade e Mobilidade',
            'quantidade'=>'3',
            'tipo'=>'ferramentas Medico',
            'valor'=>50.50,
            'fk_administradora'=>1

            ]
        );

    }
}
