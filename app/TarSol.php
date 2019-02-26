<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarSol extends Model
{
     protected $table = 'tarjeta_sol';
  protected $fillable = [
    'para',
    'puestoPara',
    'fecha',
    'folio',
    'descripcion',
    'usuarioName',
    'puestoUN',
  ];
   public function datos()
    {
        return $this->hasMany('App\DatosTarSol','id_tarSol','id');
    }
}
