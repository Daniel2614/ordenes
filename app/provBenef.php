<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provBenef extends Model
{
    protected $table = 'prov_benef';
	  protected $fillable = [
	    	'rfc',
	    	'idDatosOrden',
	    	'nombre',
	    	'concepto',
	    	'importeParcial'
	  ];

	  public function datos()
    {
        return $this->belongsToMany('App\datos_orden');
    }
}
