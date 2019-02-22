<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroTrabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_trab', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('ordenUno');
            $table->integer('ordenDos');
            $table->string('descripcionCT');
            $table->integer('idAds');
            $table->string('adscripcion');
            $table->string('zona');
            $table->string('distrito');
            $table->string('clasRNPSP');
            $table->string('cTDepende');
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
        Schema::dropIfExists('centro_trab');
    }
}
