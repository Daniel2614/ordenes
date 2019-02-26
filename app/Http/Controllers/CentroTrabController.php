<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CentroTrab;
use App\EstructuraPresupuestal;
class CentroTrabController extends Controller
{
 	public function edit($id)
    {
        //
        $ctrabajo   = CentroTrab::find($id);
        $areas = EstructuraPresupuestal::all()->pluck('descripcion','id');
        return view('Catalogos.Centro de Trabajo.edit',['ctrabajo'=>$ctrabajo,'areas'=>$areas]);
    }
    public function index(){
        $centros = CentroTrab::all();
        return view('Catalogos.Centro de Trabajo.index',['centros'=>$centros]);
    }
    public function create(){
        
        $areas = EstructuraPresupuestal::all()->pluck('descripcion','id');
        return view('Catalogos.Centro de Trabajo.create',['areas'=>$areas]);
    }
    public function store(Request $request){
      
         $mensaje = null;
        $data = null;
        \DB::beginTransaction();
        try
        {
            $ctrabajo = CentroTrab::create([
                'descripcionCT'             => $request->descripcion,
                'cTDepende'             => $request->area,
                'idEst'         => $request->adscrip,
                
            ]);
            
            \DB::commit();
            $tipo = 'success';
            $estatus= true;
            $mensaje = 'Los datos se guardaron correctamente';
            $data = [$ctrabajo];
        } catch (\Exception $e) {
            $tipo = 'errors';
            $estatus= false;
            $mensaje = $e->getMessage();
            \DB::rollback();
        }
        return redirect()->action('CentroTrabController@index');

    }
    public function update(Request $request)
    {
        // dd($request->all());
        
         $mensaje = null;
        $data = null;
        \DB::beginTransaction();
        try
        {
            $ctrabajo = CentroTrab::find($request->idCtrabajo)->update([
                'descripcionCT'             => $request->descripcion,
                'cTDepende'             => $request->area,
                'idEst'         => $request->adscrip,
                
            ]);
            
            \DB::commit();
            $tipo = 'success';
            $estatus= true;
            $mensaje = 'Los datos se guardaron correctamente';
            $data = [$ctrabajo];
        } catch (\Exception $e) {
            $tipo = 'errors';
            $estatus= false;
            $mensaje = $e->getMessage();
            \DB::rollback();
        }
        return redirect()->action('CentroTrabController@index');
    }
}
