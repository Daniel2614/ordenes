<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProvBenef extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_prov_benef', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc');
            $table->integer('idDatosOrden')->unsigned();
            $table->foreign('idDatosOrden')->references('id')->on('datos_orden');
            $table->string('nombre');
            $table->string('concepto');
            $table->string('importeParcial');
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
        Schema::dropIfExists('table_prov_benef');
    }
}
