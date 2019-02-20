<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ControlfCatmatrizdevengadogastos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('controlf_catmatrizdevengadogastos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cog')->nullable();
            $table->string('nombreCog');
            $table->integer('tipoG')->nullable();
            $table->string('caracteristicas');
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
        //
    }
}
