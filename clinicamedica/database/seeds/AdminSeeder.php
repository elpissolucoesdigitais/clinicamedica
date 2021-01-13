<?php

use Illuminate\Database\Seeder;
use App\models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Admin $admin)
    {
        $admin->create([
            'sexo'=>'Masculino',
            'cidade'=>'Boa vista',
            'email'=>'admin@gmail.com',
            'complemento'=>'casa',
            'cpf'=>'515151512',
            'rg'=>'664178',
            'nome'=>'Rafael',
            'longradouro'=>'rua asdadadacsccxv',
            'contato'=>'999988',
            'bairro'=>'Aparecida',
            'uf'=>'RR',
            'cep'=>'69256123',
            'datanascimento'=>'1994-09-30',
            'foto'=>'imagem',
            'crm'=>'25151515',
            'salario'=>'10.000',

        ]);
        $admin->create([
            'sexo'=>'Feminino',
            'cidade'=>'Boa vista',
            'email'=>'admin1@gmail.com',
            'complemento'=>'casa',
            'cpf'=>'89515151',
            'rg'=>'874178',
            'nome'=>'Francisca',
            'longradouro'=>'rua asdadadacsccxv',
            'contato'=>'999988',
            'bairro'=>'Centro',
            'uf'=>'RR',
            'cep'=>'68256123',
            'datanascimento'=>'1990-05-30',
            'foto'=>'imagem',
            'crm'=>'479215',
            'salario'=>'12.000',

        ]);
    }
}
