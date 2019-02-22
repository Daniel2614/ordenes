<style>
    table {
  border-collapse: collapse;
}
table, th, td {
  border: 1px solid black;
}
.td{
    width: 100%;
}
</style>
<div class="">
    <img src="{{ asset('img/1.png') }}" width="80px" height="80px" style="float: left;" >
    <div style="text-align: center;">
        <span style="font-weight:bold;">FISCALÍA GENERAL DEL ESTADO DE VERACRUZ DE IGNACIO DE LA LLAVE</span>
    </div>
    <div style="text-align: center; padding-top:30px;" >
    
        <span>ORDEN DE PAGO</span>
    </div>
    
<table  style="text-align:center;font-size:12px; width: 100%;margin-top: 20px">
    <tr scope="row">
        <td class="td" colspan="2">AREA QUE TRAMITA</td>
        <td class="td" colspan="9">{{$orden->area->descripcion}}</td>
    </tr>
    <tr scope="row">
        <td class="td" colspan="2">TIPO DE TRAMITE</td>
        <td class="td">PAGO DIRECTO</td>
        <td class="td">@if($orden->tipoT=='PAGO DIRECTO')
            <hr style="height: 5px;background-color: black">
            @endif
        </td>
        <td class="td">SUJETO A<br>COMPROBAR</td>
        <td class="td">@if($orden->tipoT=='SUJETO A COMPROBAR')
            <hr style="height: 5px;background-color: black">
            @endif</td>
        <td class="td" colspan="2">FONDO<br>REVOLVENTE</td>
        <td class="td">@if($orden->tipoT=='FONDO REVOLVENTE')
            <hr style="height: 5px;background-color: black">
            @endif</td>
        <td class="td">COMPROBACION</td>
        <td class="td">@if($orden->tipoT=='COMPROBACIÓN')
            <hr style="height: 5px;background-color: black">
            @endif</td>
    </tr>
    <tr>
        <td class="td">N° TRAMITE</td>
        <td class="td">{{$orden->noTramite}}</td>
        <td class="td">FECHA DE<br>ELABORACION</td>
        <td class="td" colspan="2">{{$fecha}} </td>
        <td class="td" colspan="2"></td>
        
        <td class="td">O.C.</td>
        <td class="td">{{$orden->OC}} </td>
        <td class="td">FECHA</td>
        <td class="td">{{$orden->fechaOC}}</td>
    </tr>
    <tr>
        <td class="td" colspan="1">IMPORTE DE LA<br>ORDEN</td>
        <td class="td" colspan="1">$ {{$orden->importeOrden}}</td>
        <td class="td" colspan="5">{{NumerosEnLetras::convertir($orden->importeOrden,'pesos',false)}} centavos</td>
        <td class="td">RECEPCION</td>
        <td class="td">{{$orden->recepcion}} </td>
        <td class="td">FECHA</td>
        <td class="td">{{$orden->fechaRecepcion}}</td>
    </tr>
</table>
</div>


<table style="text-align:center;font-size:12px; width: 100%; margin-top: 5px;" >

    <tr scope="row">
        <td width="100px">INSTRUCCIÓN</td>
        <td width="200px">REALIZAR PAGO A NOMBRE DE </td>
        <td colspan="6">{{$orden->rpand}} </td>
    </tr>
</table>

<table style="text-align:center;font-size:12px; width: 100%; margin-top: 5px;border-style: none;" >
    
    <tr scope="row">
        <td rowspan="2">ORGANIZACION</td>
        <td rowspan="2">PROGRAMA<br>PRESUPUESTAL</td>
        <td rowspan="2">No. DE <br> PARTIDA </td>
        <td colspan="2">PROVEEDOR O BENEFICIARIO</td>
        <td rowspan="2">CONCEPTO</td>
        <td colspan="2">IMPORTE</td>
    </tr>
    <tr scope="row">
        <td>R.F.C.</td>
        <td>NOMBRE</td>
        <td>PARCIAL</td>
        <td>TOTAL</td>
    </tr>
    <tr scope="row">
            <td rowspan="{{$orden->datos->count()}}">{{$orden->area->organizacion}} </td>
            <td  rowspan="{{$orden->datos->count()}}">{{$orden->area->proPresupuestal}} </td>
            @foreach( $orden->datos as $dato )
                   <td >{{$dato->partida->codigo_obgasto}}</td>
                   <td>
                       @foreach ($dato->proveedores as $proveedor)
                        <b>•</b> {{$proveedor->rfc}} <br>
                       @endforeach
                   </td>
                    <td>
                       @foreach ($dato->proveedores as $proveedor)
                        <b>•</b> {{$proveedor->nombre}} <br>
                       @endforeach
                   </td>
                   <td>
                       @foreach ($dato->proveedores as $proveedor)
                        <b>•</b> {{$proveedor->concepto}} <br>
                       @endforeach
                   </td>
                   <td>
                       @foreach ($dato->proveedores as $proveedor)
                        <b>•</b> {{$proveedor->importeParcial}} <br>
                       @endforeach
                   </td>
                    <td><b>$ {{$dato->importePartida}}</b></td>
                        <br><br> 
    </tr>
                <tr style="border:unset;border-style: none;">
            @endforeach
                   <td colspan="6" style="border:unset;border-style: none;"></td>
                   <td>TOTAL</td>
                   <td><b>$ {{$orden->importeOrden}}</b></td>
                </tr>
    

      
</table>


<table style="text-align:center;width: 100%;border-style: none;">
    <tr>
        <td style="border:unset;width: 33%">SOLICITA</td>
        <td style="border:unset;width: 33%">VO. BO.</td>
        <td style="border:unset;width: 33%">AUTORIZA EL PAGO</td>
    </tr>
    
    <tr>
        <td style="border:unset;width: 33%"><u>{{$orden->p1}}</u></td>
        <td style="border:unset;width: 33%"><u>{{$orden->p2}}</u></td>
        <td style="border:unset;width: 33%"><u>{{$orden->p3}}</u></td>
    </tr>
</table>