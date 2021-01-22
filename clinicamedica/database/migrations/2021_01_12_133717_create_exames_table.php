<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exames', function (Blueprint $table) {
            //5
            $table->increments('id');

            $table->string('descricao');
            $table->string('nome');

            $table->unsignedinteger('fk_paciente');
            $table->foreign('fk_paciente')->references('id')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedinteger('fk_consulta');
            $table->foreign('fk_consulta')->references('id')->on('consultas')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('exames');
    }
}
