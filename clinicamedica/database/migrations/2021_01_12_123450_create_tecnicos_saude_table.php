<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnicosSaudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicos_saude', function (Blueprint $table) {
            
            //15
            $table->increments('id');
            $table->string('cpf');
            $table->string('uf');
            $table->string('longradouro');
            $table->string('bairro');
            $table->double('salario',10,2);
            $table->string('cidade');
            $table->string('especialidade');
            $table->string('cep');
            $table->string('contato');
            $table->string('email');
            $table->string('foto');
            $table->string('complemento');
            $table->string('nome');
            $table->string('rg');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tecnicos_saude');
    }
}
