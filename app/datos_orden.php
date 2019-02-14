<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_orden extends Model
{
    protected $table = 'orden_pago';
	  protected $fillable = [
	  	'id',
	    'idOP',
		'programaP',
		'noPartida',
		'concepto',
		'importeParcial',
		'importetotal',
	  ];
	  public function orden()
   {
       return $this->belongsTo('App\OrdenPago','idOP');
   }
}
