<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosTarSol extends Model
{
    protected $table = 'datos_tar_sol';
    protected $fillable = [
    	'id_tarSol',
    	'personal',
    	'puestoCargo',
    	'vehiculo',
    	'gasolina',
		'peaje',
    	];
    	public function tarSol()
   {
       return $this->belongsTo('App\TarSol','id_tarSol','id');
   }
}
