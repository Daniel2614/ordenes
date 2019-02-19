<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableControlfEstructurapresupuestal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('controlf_estructurapresupuestal', function (Blueprint $table){
            $table->increments('id');
            $table->string('descripcion');
            $table->string('organizacion');
            $table->string('funcion');
            $table->string('proPresupuestal');
            $table->string('partida');
            $table->string('fuenteF');
            $table->string('tGasto');
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
        Schema::dropIfExists('ccontrolf_estructurapresupuestal');
    }
}
