<style>
    table {
  border-collapse: collapse;
}
table, th, td {
  border: 1px solid black;
}
td{
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
        <td colspan="2">AREA QUE TRAMITA</td>
        <td colspan="9">{{$orden->area->descripcion}}</td>
    </tr>
    <tr scope="row">
        <td colspan="2">TIPO DE TRAMITE</td>
        <td>PAGO DIRECTO</td>
        <td>@if($orden->tipoT=='PAGO DIRECTO')
            <hr>
            @endif
        </td>
        <td>SUJETO A<br>COMPROBAR</td>
        <td></td>
        <td colspan="2">FONDO<br>REVOLVENTE</td>
        <td></td>
        <td>COMPROBACION</td>
        <td></td>
    </tr>
    <tr>
        <td>N° TRAMITE</td>
        <td>{{$orden->noTramite}}</td>
        <td>FECHA DE<br>ELABORACION</td>
        <td colspan="2">{{$fecha}} </td>
        <td colspan="2"></td>
        
        <td>O.C.</td>
        <td>{{$orden->OC}} </td>
        <td>FECHA</td>
        <td>{{$orden->fechaOC}}</td>
    </tr>
    <tr>
        <td colspan="1">IMPORTE DE LA<br>ORDEN</td>
        <td colspan="1">$ {{$orden->importeOrden}}</td>
        <td colspan="5">{{NumerosEnLetras::convertir($orden->importeOrden,'pesos',false)}} centavos</td>
        <td>RECEPCION</td>
        <td>{{$orden->recepcion}} </td>
        <td>FECHA</td>
        <td>{{$orden->fechaRecepcion}}</td>
    </tr>
</table>
</div>

<hr class="my-1" style="border-top:1px solid rgba(0, 0, 0, 0)">
<table style="text-align:center;font-size:12px; width: 100%">
    <tr scope="row">
        <td >INSTRUCCIÓN</td>
        <td >REALIZAR PAGO A NOMBRE DE </td>
        <td colspan="6">RAUL CASTAÑEDA CARRERA </td>
    </tr>
    <tr scope="row">
        <td rowspan="2">ORGANIZACION<br>401A06</td>
        <td rowspan="2">PROGRAMA<br>PRESUPUESTAL</td>
        <td rowspan="2">N° DE PARTIDA </td>
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
    @foreach( $orden->datos as $dato )
        <tr scope="row">
            <td></td>
            <td>{{ $dato->programaP }}</td>
            <td>{{ $dato->noPartida }}</td>
        </tr>
    @endforeach
</table>
