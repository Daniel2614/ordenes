<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetaSolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjeta_sol', function (Blueprint $table) {
            $table->increments('id');
            $table->string('para');
            $table->string('puestoPara');
            $table->date('fecha');
            $table->string('folio');
            $table->string('descripcion');
            $table->string('usuarioName');
            $table->string('puestoUN');
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
        Schema::dropIfExists('tarjeta_sol');
    }
}
