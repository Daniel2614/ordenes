<div class="">
    <div class="row justify-content-md-center">
        <span style="font-weight:bold;">FISCALÍA GENERAL DEL ESTADO DE VERACRUZ</span>
    </div>
    <div class="row justify-content-md-center">
        <span>ORDEN DE PAGO</span>
    </div>
</div>
<hr class="my-1" style="border-top:1px solid rgba(0, 0, 0, 0)">
<table class="table-bordered col-md-12" style="text-align:center;font-size:12px;">
    <tr scope="row">
        <td colspan="2">AREA QUE TRAMITA</td>
        <td colspan="9">{{$orden->areaT}}</td>
    </tr>
    <tr scope="row">
        <td colspan="2">TIPO DE TRAMITE</td>
        <td>{{$orden->tipoT}}</td>
        <td></td>
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
<hr class="my-1" style="border-top:1px solid rgba(0, 0, 0, 0)">
<table class="table-bordered col-md-12" style="text-align:center;font-size:12px;">
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
