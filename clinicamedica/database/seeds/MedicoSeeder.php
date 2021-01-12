<?php

use Illuminate\Database\Seeder;
use App\Models\Medico;
class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Medico $medico)
    {
        $medico->create([
            'sexo'=>'Feminino',
            'cidade'=>'Boa vista',
            'email'=>'juliana@gmail.com',
            'complemento'=>'casa',
            'cpf'=>'89515151',
            'rg'=>'874178',
            'nome'=>'Juliana',
            'longradouro'=>'rua asdadadacsccxv',
            'contato'=>'999988',
            'uf'=>'RR',
            'bairro'=>'aeroporto',
            'cep'=>'68256123',
            'datanascimento'=>'1969-05-30',
            'foto'=>'imagem',
            'crm'=>'479215',
            'crmuf'=>'AM',
            'salario'=>'12.000',
            'especialidade'=>'Cardiologista'

        ]);
        $medico->create([
            'sexo'=>'Feminino',
            'cidade'=>'Boa vista',
            'email'=>'mario@gmail.com',
            'complemento'=>'casa',
            'cpf'=>'14515151',
            'rg'=>'354178',
            'nome'=>'Mario',
            'longradouro'=>'rua avcvczzasccxv',
            'contato'=>'7777',
            'uf'=>'RR',
            'bairro'=>'Tancredo neves',
            'cep'=>'8956123',
            'datanascimento'=>'1970-05-30',
            'foto'=>'imagem',
            'crm'=>'602215',
            'crmuf'=>'RJ',
            'salario'=>'20.000',
            'especialidade'=>'clinica geral'

        ]);
    }
}
