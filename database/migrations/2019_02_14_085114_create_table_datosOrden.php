<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDatosOrden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_orden', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idOP')->unsigned();
            $table->foreign('idOP')->references('id')->on('orden_pago');
            $table->integer('idPartida')->unsigned();
            $table->foreign('idPartida')->references('id')->on('controlf_catobjetogasto');
            $table->string('importePartida');
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
        Schema::dropIfExists('datos_orden');
    }
}
