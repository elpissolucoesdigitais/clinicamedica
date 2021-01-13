<?php

use Illuminate\Database\Seeder;
use App\Models\Administradora;

class AdministradoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Administradora $administradora)
    {
        $administradora->create([
            'sexo'=>'Feminino',
            'cidade'=>'Boa Vista',
            'email'=>'bruna@hotmail.com',
            'complemento'=>'casa grande',
            'salario'=>2500.00,
            'cpf'=>'033.555.666-01',
            'rg'=>'8877-3',
            'nome'=>'Bruna Oliveira',
            'longradouro'=>'São Vicente',
            'contato'=>'98112-9988',
            'bairro'=>'Centro',
            'uf'=>'Roraima',
            'cep'=>'9944555',
            'datanascimento'=>'1996-08-20',
            'foto'=>'foto bruna'
        ]);


        $administradora->create([
            'sexo'=>'Masculino',
            'cidade'=>'Boa Vista',
            'email'=>'marcos@hotmail.com',
            'complemento'=>'casa pequena',
            'salario'=>3500.00,
            'cpf'=>'044.987.666-01',
            'rg'=>'884333-3',
            'nome'=>'Marcos Oliveira',
            'longradouro'=>'São Francisco',
            'contato'=>'98122-7722',
            'bairro'=>'Centro',
            'uf'=>'Roraima',
            'cep'=>'99488654',
            'datanascimento'=>'1995-10-01',
            'foto'=>'foto marcos'
        ]);
    }
}
