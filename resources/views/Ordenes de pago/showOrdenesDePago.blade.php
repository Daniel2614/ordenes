@extends('Template.main')

@section('css')

@endsection

@section('title')
    Órden de Pago
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Capturar Orden de Pago</h5>
        </div>
        <div class="card-body">
            {!! Form::open(['id'=>'formNewOrden','novalidate','class'=>'needs-validation','route' => 'ordenes.store', 'method'=>'POST']) !!}
                <div class="row pb-3">
                    <div class="col-9">
                        {{ Form::label('area', 'ÁREA QUE TRAMITA:') }}
                        {{ Form::text('area',null,array('required','class'=>'form-control mayuscula'. ( $errors->has('area') ? ' is-invalid' : '' ),'title'=>'Área que tramita')) }}
                        <div id="error_area" class="invalid-feedback">{{ $errors->first('area') }}</div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('tramite', 'TIPO DE TRÁMITE:') }}
                        {{ Form::select('tramite',$tipoTramite,null,array('required','class'=>'form-control','title'=>'Tipo de trámite')) }}
                        <div id="error_tramite"></div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('numTramite', 'N° TRÁMITE:') }}
                        {{ Form::text('numTramite',null,array('required','class'=>'form-control mayuscula','title'=>'Número de trámite')) }}
                        <div id="error_numTramite"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('fechaElaboracion', 'FECHA DE ELABORACIÓN:') }}
                        {{ Form::date('fechaElaboracion',null,array('required','class'=>'form-control','title'=>'Fecha de elaboración')) }}
                        <div id="error_fechaElaboracion"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('oc', 'O.C. :') }}
                        {{ Form::text('oc',null,array('required','class'=>'form-control mayuscula','title'=>'')) }}
                        <div id="error_oc"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('fechaOC', 'FECHA:') }}
                        {{ Form::date('fechaOC',null,array('required','class'=>'form-control','title'=>'Fecha')) }}
                        <div id="error_fechaOC"></div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('importeOrden', 'IMPORTE DE LA ORDEN:') }}
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>                                
                            {{ Form::text('importeOrden',null,array('required','class'=>'form-control soloNumeros decimales','title'=>'Importe de la orden')) }}
                            <div id="error_importeOrden"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('letraImporte', 'LETRA DE IMPORTE:') }}
                        {{ Form::text('letraImporte',null,array('required','class'=>'form-control mayuscula','title'=>'Letra de importe')) }}
                        <div id="error_letraImporte"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('recepcion', 'RECEPCIÓN:') }}
                        {{ Form::text('recepcion',null,array('required','class'=>'form-control mayuscula','title'=>'Recepción')) }}
                        <div id="error_recepcion"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('fechaRecepcion', 'FECHA:') }}
                        {{ Form::date('fechaRecepcion',null,array('required','class'=>'form-control','title'=>'Fecha')) }}
                        <div id="error_fechaRecepcion"></div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('nombre', 'NOMBRE(S):') }}
                        {{ Form::text('nombre',null,array('required','class'=>'form-control mayuscula','title'=>'Nombre(s) de la persona')) }}
                        <div id="error_nombre"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('primerAP', 'PRIMER APELLIDO:') }}
                        {{ Form::text('primerAP',null,array('required','class'=>'form-control mayuscula','title'=>'Primer apellido de la persona')) }}
                        <div id="error_primerAP"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('segundoAP', 'SEGUNDO APELLIDO:') }}
                        {{ Form::text('segundoAP',null,array('required','class'=>'form-control mayuscula','title'=>'Segundo apellido de la persona')) }}
                        <div id="error_segundoAP"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('rfc', 'R.F.C. :') }}
                        {{ Form::text('rfc',null,array('required','class'=>'form-control mayuscula','title'=>'R.F.C. de la persona')) }}
                        <div id="error_rfc"></div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('organizacion', 'ORGANIZACIÓN:') }}
                        {{ Form::text('organizacion','401A06100',array('id'=>'organizacion','required','class'=>'form-control mayuscula','title'=>'Organización')) }}
                        <div id="error_organizacion"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('proPresupuestal', 'PROGRAMA PRESUPUESTAL:') }}
                        {{ Form::text('proPresupuestal[]',null,array('id'=>'proPresupuestal','required','class'=>'form-control mayuscula','title'=>'Programa presupuestal')) }}
                        <div id="error_proPresupuestal"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('numPartida', 'N° DE PARTIDA:') }}
                        {{ Form::text('numPartida[]',null,array('id'=>'numPartida','required','class'=>'form-control soloNumeros','title'=>'Número de partida')) }}
                        <div id="error_numPrtida"></div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('importeParcial', 'IMPORTE PARCIAL:') }}
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>                                
                            {{ Form::text('importeParcial[]',null,array('id'=>'importeParcial','required','class'=>'form-control soloNumeros decimales','title'=>'Importe parcial')) }}
                            <div id="error_importeParcial"></div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12">
                        {{ Form::label('concepto', 'CONCEPTO:') }}
                        {{ Form::textarea('concepto[]',null,array('id'=>'concepto','required','size' => '50x3','class'=>'form-control mayuscula','title'=>'Concepto')) }}
                        <div id="error_concepto"></div>
                    </div>
                </div>
                <div id="nuevoConcepto" class="col-md-12">
                </div>
                <hr id="plus" class="my-4">
                <div id="footer-buttons col-md-12">
                    <button type="button" class="btn btn-secondary btn-lg"  id="otroConcepto">Nuevo Concepto</button>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-lg','id'=>'guardarOrden']) !!} 
                </div>
            {!! Form::close() !!}
        </div>
    </div>  
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $(".decimales").on({
            "focus": function(event) {
                $(event.target).select();
            },
            "keyup": function(event) {
                $(event.target).val(function(index, value) {
                return value.replace(/\D/g, "")
                    .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                    .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
                });
            }
        });

        $("#otroConcepto").click(function(){
            var divs=document.getElementsByTagName('div');
            var num=0;
            for (x=0;x<divs.length;x++){
                if (divs[x].getAttribute('name')=="plusConcepto"){ 
                    num+=1; 
                }
            };
            num=num+1;
            var concepto = '<div id="newConcepto_'+num+'" name="plusConcepto" class="row pb-3"><div class="col-3">{{ Form::label("proPresupuestal_'+num+'", "PROGRAMA PRESUPUESTAL:") }}<input type="text" class="form-control mayuscula" title="Programa presupuestal" name="proPresupuestal[]" id="proPresupuestal_'+num+'" required><div id="error_proPresupuestal_'+num+'"></div></div><div class="col-3">{{ Form::label("numPartida_'+num+'", "N° DE PARTIDA:") }}<input type="text" class="form-control soloNumeros" title="Número de partida" name="numPartida[]" id="numPartida_'+num+'" required><div id="error_numPrtida_'+num+'"></div></div><div class="col-3">{{ Form::label("importeParcial_'+num+'", "IMPORTE PARCIAL:") }}<div class="input-group mb-2 mr-sm-2"><div class="input-group-prepend"><div class="input-group-text">$</div></div><input type="text" class="form-control soloNumeros decimales" title="Importe parcial" name="importeParcial[]" id="importeParcial_'+num+'" required><div id="error_importeParcial_'+num+'"></div></div></div></div><div class="row pb-3"><div class="col-12">{{ Form::label("concepto_'+num+'", "CONCEPTO:") }}<textarea class="form-control mayuscula" title="Concepto" cols="50" rows="3" name="concepto[]" id="concepto_'+num+'" required></textarea><div id="error_concepto_'+num+'"></div></div></div></div><hr class="my-1">';
            $("#nuevoConcepto").append(concepto);

        });
    });
</script>
@endsection