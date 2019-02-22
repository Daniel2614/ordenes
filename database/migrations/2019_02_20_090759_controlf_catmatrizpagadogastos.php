<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ControlfCatmatrizpagadogastos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlf_catmatrizpagadogastos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cog');
            $table->string('nombreCog');
            $table->string('tipoG');
            $table->string('caracteristicas')->nullable();
            $table->string('mPago');
            $table->string('cargo');
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
        Schema::dropIfExists('controlf_catmatrizpagadogastos');

    }
}
