<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sexo');
            $table->string('cidade');
            $table->string('email');
            $table->string('complemento');
            $table->double('salario');
            $table->string('cpf');
            $table->string('rg');
            $table->string('nome');
            $table->string('longradouro');
            $table->string('contato');
            $table->string('bairro');
            $table->string('uf');
            $table->string('cep');
            $table->string('datanascimento');
            $table->string('foto');
            $table->double('salario',10,2);
            $table->unsignedInteger('fk_clinica');
            $table->foreign('fk_clinica')->references('id')->on('clinicas');
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
        Schema::dropIfExists('secretarias');
    }
}
