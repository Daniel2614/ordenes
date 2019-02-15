<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableControlfCatobjetogasto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('controlf_catobjetogasto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_obgasto',50);
            $table->string('nombre_obgasto',250);
            $table->integer('obgasto_padre')->nullable();
            $table->boolean('estatus',true);
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
        Schema::dropIfExists('controlf_catobjetogasto');
    }
}
