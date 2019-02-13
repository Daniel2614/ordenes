<?php

namespace App\Models;

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
