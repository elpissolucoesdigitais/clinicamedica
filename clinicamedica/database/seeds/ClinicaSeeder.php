<?php

use Illuminate\Database\Seeder;
use App\Models\Clinica;
class ClinicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Clinica $clinica)
    {
        $clinica->create([
            'responsaveltecnico'=>'João',
            'nome'=>'Clinica saúde total',
            'logradouro'=>'rua xaadadacvx',
            'numero'=>'24',
            'cep'=>'69300300',
            'cidade'=>'Boa vista',
            'email'=>'saude@gmail.com',
            'contato'=>'999999',
            'foto'=>'imagem',
            'complemento'=>'casa',
            'bairro'=>'Centro',
            'cnpj'=>'99.9999.9999/0001-00',
            'uf'=>'RR',
        ]);
        $clinica->create([
            'responsaveltecnico'=>'Maria',
            'nome'=>'Clinica meia saúde',
            'logradouro'=>'rua fngnbmykyukyu',
            'numero'=>'24',
            'cep'=>'69300600',
            'cidade'=>'Boa vista',
            'email'=>'meiasaude@gmail.com',
            'contato'=>'88888',
            'foto'=>'imagem',
            'complemento'=>'Predio',
            'bairro'=>'Caçari',
            'cnpj'=>'88.9999.9888/0001-00',
            'uf'=>'RR',
        ]);
    }
}
