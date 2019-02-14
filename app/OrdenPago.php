<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenPago extends Model
{
     protected $table = 'orden_pago';
	  protected $fillable = [
	    'areaT',
			'tipoT',
			'noTramite',
			'fechaEla',
			'OC',
			'fechaOC',
			'recepcion',
			'fechaRecepcion',
			'importeOrden',
			'nombreProveedor',
			'rfcProveedor',
			'organizacion',
	  ];

	  public function datos()
    {
        return $this->hasMany('App\datos_orden','idOP','id');
    }
}
