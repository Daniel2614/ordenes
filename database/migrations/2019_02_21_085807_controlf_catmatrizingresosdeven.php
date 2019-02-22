<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ControlfCatmatrizingresosdeven extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('controlf_catmatrizingresosdeven', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('cri')->nullable();
            $table->string('nombrecri')->nullable();
            $table->string('caracteristicas')->nullable();
            $table->string('cargo')->nullable();
            $table->string('cuentaC');
            $table->string('abono');
            $table->string('cuentaAb');
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
        Schema::dropIfExists('controlf_catmatrizingresosdeven');
    }
}
