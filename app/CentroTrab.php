<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroTrab extends Model
{
    protected $table = 'centro_trab';

    protected $fillable = [
    	'id',
    	// 'plaza',
    	// 'categoria',
        // 'numPersonal',
    	// 'sindicato',
    	// 'fechaInicio',
    	// 'situacion',
    	// 'turno',
    	// 'compensacion',
    	// 'cuip',
    	// 'habEncargo',
    	'idCentroTrabajo',
    	// 'comision',
    	'zona',
    	// 'nss',
        'idMunicipioCTrabajo',
        'idPer',
        // 'idPuesto',
        'idArea',
        // 'archivoCt',
    ];
}
