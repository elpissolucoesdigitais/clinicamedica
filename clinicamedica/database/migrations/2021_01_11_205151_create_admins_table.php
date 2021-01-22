<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sexo');
            $table->string('cidade');
            $table->string('email');
            $table->string('complemento');
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
            $table->string('crm');
            $table->double('salario',10,2);
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
        Schema::dropIfExists('admins');
    }
}
