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
            $table->string('descripcionCT');
            $table->string('cTDepende');
            $table->integer('idEst')->unsigned()->nullable();
            $table->foreign('idEst')->references('id')->on('controlf_estructurapresupuestal');
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
