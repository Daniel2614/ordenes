<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrdenesRequest;
use App\OrdenPago;
use App\datos_orden;
use App\EstructuraPresupuestal;
use App\provBenef;
use App\CatObjetoGasto;
use Jenssegers\Date\Date;
use NumerosEnLetras;
use PDF;
class OrdenesDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $ordenes = OrdenPago::all();
        // dd($ordenes);
        return view('Ordenes de pago.tableOrdenesDePago',['ordenes'=>$ordenes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = EstructuraPresupuestal::all()->pluck('descripcion', 'id');
        $partidas = CatObjetoGasto::all()->pluck('codigo_obgasto','id');
        $partidas2 = CatObjetoGasto::select('id','codigo_obgasto')->get();
        $tipoTramite = array(
            null                  => 'SELECCIONE UNA OPCIÓN',
            'PAGO DIRECTO'        => 'PAGO DIRECTO',
            'SUJETO A COMPROBAR'  => 'SUJETO A COMPROBAR',
            'FONDO REVOLVENTE'    => 'FONDO REVOLVENTE',
            'COMPROBACIÓN'        => 'COMPROBACIÓN'
        );
        return view('Ordenes de pago.showOrdenesDePago',compact('tipoTramite','areas','partidas','partidas2'));
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
                'idArea'             => $request->area,
                'tipoT'             => $request->tramite,
                'noTramite'         => $request->numTramite,
                'fechaEla'          => $request->fechaElaboracion,
                'importeOrden'      => $request->importeOrden,
                'rpand'             => $request->rpand,
                //'rfc'               => $request->rfc,
                //'organizacion'      => $request->organizacion,
                'p1'                => ':U',
                'p2'                => ':V',
                'p3'                => 'e.e'
            ]);
            foreach ($request->proPresupuestal as $key => $value) {
                $newDatosOrden = datos_orden::create([
                    'idOP'              => $newOrden->id,
                    'idPartida'         => $request->numPartida[$key],
                    'importePartida'    => $request->importeParcial[$key],
                    //'programaP'         => $value,
                    //'noPartida'         => $request->numPartida[$key],
                    //'concepto'          => $request->concepto[$key],
                    //'importeParcial'    => $request->importeParcial[$key],
                    //'importetotal'      => $request->importeParcial[$key],
                ]);
                $newProvBen = provBenef::create([
                    'idDatosOrden'      => $newDatosOrden->id,
                    'rfc'               => $request->rfc[$key],
                    'nombre'            => $request->nombre[$key],
                    'concepto'          => $request->concepto[$key],
                    'importeParcial'    => $request->importeParcial[$key]
                ]);
            };
            \DB::commit();
            $tipo = 'success';
            $estatus= true;
            $mensaje = 'Los datos se guardaron correctamente';
            $data = [$newOrden,$newDatosOrden,$newProvBen];
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
        setlocale(LC_TIME, 'Spanish');
        $orden = OrdenPago::with('datos','area')->find($id);
         dd($orden->area);
        $fecha = new Date($orden->fechaEla);
        $vistaurl = 'Ordenes de pago.OrdenDePago';
        $view = \View::make('Ordenes de pago.OrdenDePago',[
            'orden'      =>$orden,
            'fecha'      =>$fecha,

        ])->with(["page" => "reporte"])->render();
       
        $pdf = \App::make('dompdf.wrapper');
        $pdf->setPaper("A4", "landscape");
        $pdf->loadHTML($view);
        
        return $pdf->stream('reporte.pdf');
        // return view('Ordenes de pago.OrdenDePago',['orden'=>$orden,'fecha'=>$fecha->format('d-F-Y')]);
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
    /*public function orden($id){
        setlocale(LC_TIME, 'Spanish');
        $orden = OrdenPago::with('datos')->find($id);
        $fecha = new Date($orden->fechaEla);
        
        return view('Ordenes de pago.OrdenDePago',['orden'=>$orden,'fecha'=>$fecha->format('d-F-Y')]);
    }
    public function ordenes(){
        $ordenes = OrdenPago::all();
        // dd($ordenes);
        return view('Ordenes de pago.tableOrdenesDePago',['ordenes'=>$ordenes]);
    }*/
}
