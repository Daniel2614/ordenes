<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatCuentasContables extends Model
{
    protected $table = 'controlf_catcuentascontables';
  protected $fillable = [
  	'id',
    'codigo',
    'nombre',
    'cuenta_padre',
    'naturaleza',
    'tipo',
    'saldo_inicial',
    'estatus'
  ];
}
