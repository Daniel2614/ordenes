<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatCuentasContables extends Model
{
    protected $table = 'controlf_catcuentascontables';
  protected $fillable = [
  	'id',
    'codigo_obgasto',
    'nombre_obgasto',
    'obgasto_padre',
    'estatus'
  ];
}
