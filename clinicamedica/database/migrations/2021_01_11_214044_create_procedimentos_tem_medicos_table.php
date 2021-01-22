<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedimentosTemMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimentos_tem_medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_procedimento');
            $table->unsignedInteger('fk_medico');
            $table->foreign('fk_medico')->references('id')->on('medicos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_procedimento')->references('id')->on('procedimentos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('procedimentos_tem_medicos');
    }
}
