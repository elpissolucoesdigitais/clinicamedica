<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicas', function (Blueprint $table) {
            //14
            $table->increments('id');
            $table->string('responsaveltecnico');
            $table->string('nome');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('cep');
            $table->string('cidade');
            $table->string('email');
            $table->string('contato');
            $table->string('foto');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cnpj');
            $table->string('uf');
            $table->string('senha');
            $table->timestamps();
            


            //$table->unsignedInteger('entrega_fk');	

            //$table->foreign('entrega_fk')->references('id')->on('entrega');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinicas');
    }
}
