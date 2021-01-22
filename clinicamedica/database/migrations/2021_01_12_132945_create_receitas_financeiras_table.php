<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitasFinanceirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas_financeiras', function (Blueprint $table) {
            //3
            $table->increments('id');

            $table->unsignedinteger('fk_consulta');
            $table->foreign('fk_consulta')->references('id')->on('consultas')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedinteger('fk_administradora');
            $table->foreign('fk_administradora')->references('id')->on('administradoras')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('receitas_financeiras');
    }
}
