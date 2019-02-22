<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CentroTrab;
class CentroTrabController extends Controller
{
 	public function edit($id)
    {
        //
        $ctrabajo   = CentroTrab::find($id);
        // $puestos    = CatPuestos::all()->pluck('puesto', 'id');
        // $unidades   = CatUnidadAdscripcion::all()->pluck('unidadads', 'id');
        // $municipios = CatMunicipioCtrab::all()->pluck('municipio', 'id');
        return view('Catalogos.Centro de Trabajo.edit')
                        ->with(['ctrabajo'        => $ctrabajo]);
                        // ->with(['puestos'         => $puestos])
                        // ->with(['unidades'        => $unidades])
                        // ->with(['municipios'      => $municipios])
                        // ->with(['pageHasChildren' => 'read'])
                        // ->with(['pageChilden'     => 'personaindex']);
    }
}
