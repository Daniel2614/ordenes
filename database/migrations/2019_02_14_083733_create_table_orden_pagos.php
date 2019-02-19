<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrdenPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folioCaja')->nullable();
            $table->string('noRecibo')->nullable();
            $table->integer('idArea')->unsigned();
            $table->foreign('idArea')->references('id')->on('controlf_estructurapresupuestal');
            $table->enum('tipoT', ['PAGO DIRECTO', 'SUJETO A COMPROBAR','FONDO REVOLVENTE','COMPROBACIÓN']);//tipo de TRAMITE
            $table->string('noTramite');//número de trámite
            $table->string('OC')->nullable();//NO SE QUE CHINGADOS ES OC
            $table->date('fechaOC')->nullable();
            $table->string('importeOrden');
            $table->date('fechaEla');//fecha de elaboración
            $table->string('recepcion')->nullable();
            $table->date('fechaRecepcion')->nullable();
            $table->string('rpand');
            $table->string('p1');
            $table->string('p2');
            $table->string('p3');
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
        Schema::dropIfExists('orden_pago');
    }
}
