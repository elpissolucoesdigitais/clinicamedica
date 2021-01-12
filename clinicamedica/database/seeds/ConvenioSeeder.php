<?php

use Illuminate\Database\Seeder;
use App\Models\Convenio;

class ConvenioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Convenio $convenio)
    {
        $convenio->create([
            'status'=>'inativo',
            'nome'=>'plano de saude Basico', 
            'descricao'=>'Convenio Individual',
            'validade'=>'2021-05-20', 
            'cnpj'=>'2231424314', 
            'email'=>'planobasico@hotmail.com',
            'contato'=>'98113-6655',
            'valor'=>30.99]
        );

        $convenio->create([
                'status'=>'ativo',
                'nome'=>'plano de saude Unimed', 
                'descricao'=>'Convenio Familiar',
                'validade'=>'2021-08-01', 
                'cnpj'=>'4452678784', 
                'email'=>'planounimed@hotmail.com',
                'contato'=>'98112-3322',
                'valor'=>50.99]
        );
    }
}
