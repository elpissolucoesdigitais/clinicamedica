<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespesasFinanceirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesas_financeiras', function (Blueprint $table) {
            //7
            $table->increments('id');
            
            $table->unsignedinteger('fk_medico');
            $table->foreign('fk_medico')->references('id')->on('medicos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedinteger('fk_tecnico_saude');
            $table->foreign('fk_tecnico_saude')->references('id')->on('tecnicos_saude')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedinteger('fk_clinica');
            $table->foreign('fk_clinica')->references('id')->on('clinicas')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedinteger('fk_secretaria');
            $table->foreign('fk_secretaria')->references('id')->on('secretarias')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedinteger('fk_estoque');
            $table->foreign('fk_estoque')->references('id')->on('estoques')->onDelete('cascade')->onUpdate('cascade');

            $table->string('tipo');

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
        Schema::dropIfExists('despesas_financeiras');
    }
}
