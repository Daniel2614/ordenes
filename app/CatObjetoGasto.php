<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatObjetoGasto extends Model
{
  protected $table = 'controlf_catobjetogasto';
  protected $fillable = [
  	'id',
    'codigo_obgasto',
    'nombre_obgasto',
    'obgasto_padre',
    'estatus'
  ];
}
