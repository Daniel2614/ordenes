<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatrizIngresosDevengados extends Model
{
     protected $table = 'controlf_catmatrizingresosdeven';
  protected $fillable = [
  	'id',
    'cri',
    'nombrecri',
    'caracteristicas',
    'cargo',
    'cuentaC',
    'abono',
    'cuentaAb'
  ];
}
