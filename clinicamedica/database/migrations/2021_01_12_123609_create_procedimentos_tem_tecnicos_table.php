<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedimentosTemTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimentos_tem_tecnicos', function (Blueprint $table) {
            
            //3
            $table->increments('id');
            $table->unsignedinteger('fk_tecnico_saude');
            $table->foreign('fk_tecnico_saude')->references('id')->on('tecnicos_saude')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedinteger('fk_procedimento');
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
        Schema::dropIfExists('procedimentos_tem_tecnicos');
    }
}
