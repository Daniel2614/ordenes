<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosOrdenTable extends Migration
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
            $table->integer('idOP')->unsigned()->nullable();
            $table->foreign('idOP')->references('id')->on('orden_pago');
            $table->string('programaP');//programa presupuestal
            $table->string('noPartida');
            $table->string('concepto');
            $table->string('importeParcial');
            $table->string('importetotal');
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
