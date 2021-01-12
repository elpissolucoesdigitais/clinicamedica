<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatoriosPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios_pacientes', function (Blueprint $table) {
            //7
            $table->increments('id');

            $table->string('nome');
            $table->string('descricao');

            $table->unsignedinteger('fk_medicamento');
            $table->foreign('fk_medicamento')->references('id')->on('medicamentos');

            $table->unsignedinteger('fk_medico');
            $table->foreign('fk_medico')->references('id')->on('medicos');

            $table->unsignedinteger('fk_tecnico_saude');
            $table->foreign('fk_tecnico_saude')->references('id')->on('tecnicos_saude');

            $table->unsignedinteger('fk_exame');
            $table->foreign('fk_exame')->references('id')->on('exames');

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
        Schema::dropIfExists('relatorios_pacientes');
    }
}
