<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            //7
            $table->increments('id');

            $table->string('hora');
            $table->string('data');
            $table->string('status');
            $table->double('valor',10,2);

            $table->unsignedinteger('fk_procedimento');
            $table->foreign('fk_procedimento')->references('id')->on('procedimentos');

            $table->unsignedinteger('fk_medico');
            $table->foreign('fk_medico')->references('id')->on('medicos');

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
        Schema::dropIfExists('consultas');
    }
}
