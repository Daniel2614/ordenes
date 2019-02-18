<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrdenesRequest;
use App\OrdenPago;
use App\datos_orden;
use Jenssegers\Date\Date;
use NumerosEnLetras;

class OrdenesDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tipoTramite = array(
            null            => 'SELECCIONE UNA OPCIÓN',
            'PAGO DIRECTO'  => 'PAGO DIRECTO',
            'OBRA PÚBLICA'  => 'OBRA PÚBLICA',
            'VIÁTICOS'      => 'VIÁTICOS'
        );
        return view('Ordenes de pago.showOrdenesDePago',compact('tipoTramite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdenesRequest $request)
    {
        //dd($request->all());
        $mensaje = null;
        $data = null;
        \DB::beginTransaction();
        try
        {
            $newOrden = OrdenPago::create([
                'areaT'             => $request->area,
                'tipoT'             => $request->tramite,
                'noTramite'         => $request->numTramite,
                'fechaEla'          => $request->fechaElaboracion,
                'OC'                => $request->oc,
                'fechaOC'           => $request->fechaOC,
                'recepcion'         => $request->recepcion,
                'fechaRecepcion'    => $request->fechaRecepcion,
                'importeOrden'      => $request->importeOrden,
                'nombre'            => $request->nombre,
                'primerAp'          => $request->primerAP,
                'segundoAp'         => $request->segundoAP,
                'rfc'               => $request->rfc,
                'organizacion'      => $request->organizacion,
            ]);
            $newDatosOrden = datos_orden::create([
                'idOP'              => $newOrden->id,
                'programaP'         => $request->proPresupuestal,
                'noPartida'         => $request->numPartida,
                'concepto'          => $request->concepto,
                'importeParcial'    => $request->importeParcial,
                'importetotal'      => $request->importeParcial,
            ]);
            \DB::commit();
            $tipo = 'success';
            $estatus= true;
            $mensaje = 'Los datos se guardaron correctamente';
            $data = [$newOrden,$newDatosOrden];
        } catch (\Exception $e) {
            $tipo = 'errors';
            $estatus= false;
            $mensaje = $e->getMessage();
            \DB::rollback();
        }
        return response()->json(array('estatus' => $estatus, 'mensaje' => $mensaje, 'tipo' => $tipo, 'data' => $data));


        //return response()->json($newOrden);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function orden($id){
        setlocale(LC_TIME, 'Spanish');
        $orden = OrdenPago::with('datos')->find($id);
        $fecha = new Date($orden->fechaEla);
        
        return view('Ordenes de pago.OrdenDePago',['orden'=>$orden,'fecha'=>$fecha->format('d-F-Y')]);
    }
    public function ordenes(){
        $ordenes = OrdenPago::all();
        // dd($ordenes);
        return view('Ordenes de pago.tableOrdenesDePago',['ordenes'=>$ordenes]);
    }
}
