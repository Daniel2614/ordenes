<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosTarSol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_tar_sol', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tarSol')->nullable()->unsigned();
            $table->foreign('id_tarSol')->references('id')->on('tarjeta_sol');
            $table->string('personal');
            $table->string('puestoCargo');
            $table->string('vehiculo');
            $table->integer('gasolina');
            $table->integer('peaje');
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
        Schema::dropIfExists('datos_tar_sol');
    }
}
