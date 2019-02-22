<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_orden extends Model
{
    protected $table = 'datos_orden';
	  protected $fillable = [
	  	'idOP',
		'idPartida',
		'importePartida',
	  ];
	  public function orden()
   {
       return $this->belongsTo('App\OrdenPago','idOP','id');
   }
   public function proveedores()
   {
   		return $this->hasMany('App\provBenef','idDatosOrden','id');
   }
    public function partida()
    {
      return $this->hasOne('App\CatObjetoGasto','id','idPartida');
    }
}
