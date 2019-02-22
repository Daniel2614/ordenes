<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroTrab extends Model
{
    protected $table = 'centro_trab';

    protected $fillable = [
    	
    	'descripcionCT',
        'cTDepende',
        'idEst',
        
    ];
    public function area()
    {
        return $this->hasOne('App\EstructuraPresupuestal','id','idEst');
    }
}
