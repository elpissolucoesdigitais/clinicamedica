<?php

use Illuminate\Database\Seeder;
use App\Models\Secretaria;

class SecretariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Secretaria $secretaria)
    {
        $secretaria->create([
            //16
            'uf'=>'RR',
            'nome'=>'Leticia',
            'longradouro'=>'Dom Aquino',
            'sexo'=>'Feminino',
            'cpf'=>'022.123.456-01',
            'rg'=>'09345',
            'datanascimento'=>'1998-10-05',
            'cidade'=>'Boa Vista',
            'contato'=>'98112-6655',
            'bairro'=>'Aparecida',
            'cep'=>'764000',
            'email'=>'leticia@hotmail.com',
            'foto'=>'imagem leticia',
            'complemento'=>'casa com portão grande',
            'salario'=>1000.00,
            'fk_clinica'=>1

            ]
        );

        $secretaria->create([
            //16
            'uf'=>'AM',
            'nome'=>'Raquel',
            'longradouro'=>'Ten Cicero',
            'sexo'=>'Feminino',
            'cpf'=>'011.111.444-09',
            'rg'=>'66778',
            'datanascimento'=>'1999-11-10',
            'cidade'=>'Manaus',
            'contato'=>'98114-1234',
            'bairro'=>'Aparecida',
            'cep'=>'97383',
            'email'=>'raquel@hotmail.com',
            'foto'=>'imagem raquel',
            'complemento'=>'casa com portão grande e casa grande',
            'salario'=>1500.00,
            'fk_clinica'=>2

            ]
        );

    }
}
