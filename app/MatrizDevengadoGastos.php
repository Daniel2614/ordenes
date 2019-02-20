<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatrizDevengadoGastos extends Model
{
     protected $table = 'controlf_catmatrizdevengadogastos';
  protected $fillable = [
  	'id',
    'cog',
    'nombreCog',
    'tipoG',
    'caracteristicas',
    'cargo',
    'cuentaC',
    'abono',
    'cuentaAb'
  ];
}
