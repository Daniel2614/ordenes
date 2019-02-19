<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenPago extends Model
{
     protected $table = 'orden_pago';
	  protected $fillable = [
	    	'areaT',
			'tipoT',
			'sujeto',
			'fondoR',
			'comprobacion',
			'noTramite',
			'fechaEla',
			'OC',
			'fechaOC',
			'recepcion',
			'fechaRecepcion',
			'importeOrden',
			'nombre',
			'primerAp',
			'segundoAp',
			'rfc',
			'organizacion',
	  ];

	  public function datos()
    {
        return $this->hasMany('App\datos_orden','idOP','id');
    }
    public function area()
    {
        return $this->hasOne('App\EstructuraPresupuestal');
    }
}
