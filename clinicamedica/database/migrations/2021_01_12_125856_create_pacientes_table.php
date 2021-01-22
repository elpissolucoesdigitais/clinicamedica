<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('altura');
            $table->string('pressao');
            $table->string('numero');
            $table->string('uf');
            $table->string('peso');
            $table->string('nome');
            $table->string('longradouro');
            $table->string('sexo');
            $table->string('cpf');
            $table->string('rg');
            $table->string('data_nascimento');
            $table->string('cidade');
            $table->string('contato');
            $table->string('bairro');
            $table->string('cep');
            $table->string('email');
            $table->string('foto');
            $table->string('nomepai');
            $table->string('nomemae');
            $table->string('complemento');
            $table->unsignedInteger('fk_convenio');
            $table->foreign('fk_convenio')->references('id')->on('convenios')->onDelete('cascade')->onUpdate('cascade');
            $table->string('senha');
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
        Schema::dropIfExists('pacientes');
    }
}
