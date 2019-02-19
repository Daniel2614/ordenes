<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstructuraPresupuestal extends Model
{
    //
      protected $table = 'controlf_estructurapresupuestal';
    protected $fillable = [
    	'id',
    	'organizacion',
    	'funcion',
    	'proPresupuestal',
    	'partida',
    	'fuenteF',
    	'tGasto',
    	'descripcion'
    	];

        public function ordenes()
    {
        return $this->belongsToMany('App\OrdenPago');
    }

}
