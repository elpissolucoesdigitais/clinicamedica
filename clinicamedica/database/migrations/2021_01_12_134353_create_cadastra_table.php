<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastra', function (Blueprint $table) {
            //4
            $table->increments('id');

            $table->unsignedinteger('fk_paciente');
            $table->foreign('fk_paciente')->references('id')->on('pacientes');

            $table->unsignedinteger('fk_secretaria');
            $table->foreign('fk_secretaria')->references('id')->on('secretarias');

            $table->unsignedinteger('fk_administradora');
            $table->foreign('fk_administradora')->references('id')->on('administradoras');

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
        Schema::dropIfExists('cadastra');
    }
}
