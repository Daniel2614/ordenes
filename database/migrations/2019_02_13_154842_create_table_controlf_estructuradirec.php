<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ControlfEstructuradirec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('controlf_estructuradirec', function (Blueprint $table){
            $table->increments('id');
            $table->string('direccion');
             $table->string('subDirec');
              $table->string('depto');
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
        Schema::dropIfExists('controlf_estructuradirec');
    }
}