<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenPago extends Model
{
     protected $table = 'orden_pago';
	  protected $fillable = [
	    	'folioCaja',
			'noRecibo',
			'idArea',
			'tipoT',
			'noTramite',
			'OC',
			'fechaOC',
			'importeOrden',
			'recepcion',
			'fechaRecepcion',
			'rpand',
			'p1',
			'p2',
			'p3',
	  ];

	  public function datos()
    {
        return $this->hasMany('App\datos_orden','idOP','id');
    }
    public function area()
    {
        return $this->hasOne('App\EstructuraPresupuestal','id','idArea');
    }
}
