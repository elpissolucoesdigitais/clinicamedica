<?php

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Paciente $paciente)
    {
        $paciente->create([
            'altura'=>'1.60',
            'pressao'=>'90.2',
            'numero'=>'3344',
            'uf'=>'RR',
            'peso'=>'54.20',
            'nome'=>'Vitor',
            'longradouro'=>'Guariguara',
            'sexo'=>'Masculino',
            'cpf'=>'099.888.777-05',
            'rg'=>'887766',
            'data_nascimento'=>'1992-03-01',
            'cidade'=>'Boa Vista',
            'contato'=>'98113-0988',
            'bairro'=>'Paraviana',
            'cep'=>'885321',
            'email'=>'vitor@hotmail.com',
            'foto'=>'imagem vitor',
            'nomepai'=>'julio',
            'nomemae'=>'ana',
            'complemento'=>'casa media',
            'fk_convenio'=>1

            ]
        );


        $paciente->create([
            'altura'=>'1.70',
            'pressao'=>'100.2',
            'numero'=>'7766',
            'uf'=>'AM',
            'peso'=>'60.20',
            'nome'=>'luiz',
            'longradouro'=>'Cerejeira',
            'sexo'=>'Masculino',
            'cpf'=>'077.444.333-05',
            'rg'=>'995356',
            'data_nascimento'=>'1990-05-20',
            'cidade'=>'Manaus',
            'contato'=>'98112-0233',
            'bairro'=>'Paraviana',
            'cep'=>'876535',
            'email'=>'luiz@hotmail.com',
            'foto'=>'imagem luiz',
            'nomepai'=>'wiliam',
            'nomemae'=>'amanda',
            'complemento'=>'casa grande',
            'fk_convenio'=>2

            ]
        );


    }
}
