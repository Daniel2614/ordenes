<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstructuraOrg extends Model
{
    //
      protected $table = 'controlf_estructuradirec';
    protected $fillable = [
    	'id',
    	'direccion',
    	'subDirec',
    	'depto'

    	];

}
