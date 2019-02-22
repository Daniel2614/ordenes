<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatrizPagadoGastos extends Model
{
    protected $table = 'controlf_catmatrizpagadogastos';
    protected $fillable = [
    	'id',
    	'cog',
    	'nombreCog',
    	'tipoG',
    	'caracteristicas',
    	'mPago',
    	'cargo',
    	'cuentaC',
    	'abono',
    	'cuentaAb'
    	];
}
