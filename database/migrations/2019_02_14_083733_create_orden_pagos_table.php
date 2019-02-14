<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenPagosTable extends Migration
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
            $table->string('areaT');//area que tramita
            $table->enum('tipoT', ['pagoD', 'sujeroC','fondoR','comprobacion']);//tipo de trámite
            $table->string('noTramite');//número de trámoite
            $table->date('fechaEla');//fecha de elaboración
            $table->string('OC');//NO SE QUE CHINGADOS ES OC
            $table->date('fechaOC');
            $table->string('recepcion');
            $table->date('fechaRecepcion');
            $table->double('importeOrden', 8, 2);
            $table->string('nombreProveedor');
            $table->string('rfcProveedor');
            $table->string('organizacion');
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
