@extends('Template.main')

@section('css')
<link href="{{ asset('plugins/Select2/css/Edit/select2.css') }}" rel="stylesheet">
<!--<link href="{{ asset('plugins/Select2/css/Bootstrap4/select2-bootstrap4.min.css') }}" rel="stylesheet">-->
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
                    <div class="col-6">
                        {{ Form::label('area', 'ÁREA QUE TRAMITA:') }}
                        {{ Form::select('area',$areas,null,array('required','class'=>'form-control mayuscula select2 areas'. ( $errors->has('area') ? ' is-invalid' : '' ),'title'=>'Área que tramita')) }}
                        <div id="error_area" class="invalid-feedback">{{ $errors->first('area') }}</div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('tramite', 'TIPO DE TRÁMITE:') }}
                        {{ Form::select('tramite',$tipoTramite,null,array('required','class'=>'form-control select2'. ( $errors->has('tramite') ? ' is-invalid' : '' ),'title'=>'Tipo de trámite')) }}
                        <div id="error_tramite" class="invalid-feedback">{{ $errors->first('tramite') }}</div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('numTramite', 'N° TRÁMITE:') }}
                        {{ Form::text('numTramite',null,array('required','class'=>'form-control mayuscula'. ( $errors->has('numTramite') ? ' is-invalid' : '' ),'title'=>'Número de trámite')) }}
                        <div id="error_numTramite" class="invalid-feedback">{{ $errors->first('numTramite') }}</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('fechaElaboracion', 'FECHA DE ELABORACIÓN:') }}
                        {{ Form::date('fechaElaboracion',null,array('required','class'=>'form-control'. ( $errors->has('fechaElaboracion') ? ' is-invalid' : '' ),'title'=>'Fecha de elaboración')) }}
                        <div id="error_fechaElaboracion" class="invalid-feedback">{{ $errors->first('fechaElaboracion') }}</div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('oc', 'O.C. :') }}
                        {{ Form::text('oc',null,array('class'=>'form-control mayuscula','title'=>'','disabled')) }}
                        <!--<div id="error_oc"></div>-->
                    </div>
                    <div class="col-3">
                        {{ Form::label('fechaOC', 'FECHA:') }}
                        {{ Form::date('fechaOC',null,array('class'=>'form-control','title'=>'Fecha','disabled')) }}
                        <!--<div id="error_fechaOC"></div>-->
                    </div>
                    <div class="col-3">
                        {{ Form::label('importeOrden', 'IMPORTE DE LA ORDEN:') }}
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>                                
                            {{ Form::text('importeOrden',null,array('required','class'=>'form-control soloNumeros decimales'. ( $errors->has('importeOrden') ? ' is-invalid' : '' ),'title'=>'Importe de la orden')) }}
                            <div id="error_importeOrden" class="invalid-feedback">{{ $errors->first('importeOrden') }}</div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('recepcion', 'RECEPCIÓN:') }}
                        {{ Form::text('recepcion',null,array('class'=>'form-control mayuscula','title'=>'Recepción','disabled')) }}
                        <!--<div id="error_recepcion"></div>-->
                    </div>
                    <div class="col-3">
                        {{ Form::label('fechaRecepcion', 'FECHA:') }}
                        {{ Form::date('fechaRecepcion',null,array('class'=>'form-control','title'=>'Fecha','disabled')) }}
                        <!--<div id="error_fechaRecepcion"></div>-->
                    </div>
                    <div class="col-6">
                        {{ Form::label('rpand', 'REALIZAR PAGO A NOMBRE DE:') }}
                        {{ Form::text('rpand',null,array('class'=>'form-control mayuscula'. ( $errors->has('rpand') ? ' is-invalid' : '' ),'title'=>'Realizar pago a nombre de')) }}
                        <div id="error_rpand" class="invalid-feedback">{{ $errors->first('rpand') }}</div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('proPresupuestal', 'PROGRAMA PRESUPUESTAL:') }}
                        {{ Form::text('proPresupuestal[]',null,array('id'=>'proPresupuestal','required','class'=>'form-control mayuscula'. ( $errors->has('proPresupuestal.*') ? ' is-invalid' : '' ),'title'=>'Programa presupuestal')) }}
                        <div id="error_proPresupuestal" class="invalid-feedback">{{ $errors->first('proPresupuestal.*') }}</div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('numPartida', 'NO. DE PARTIDA:') }}
                        {{ Form::select('numPartida[]',$partidas,null,array('id'=>'numPartida','required','class'=>'form-control soloNumeros select2 gastos'. ( $errors->has('numPartida.*') ? ' is-invalid' : '' ),'title'=>'Número de partida')) }}
                        <div id="error_numPrtida" class="invalid-feedback">{{ $errors->first('numPartida.*') }}</div>
                    </div>
                    <div class="col-6">
                        {{ Form::label('nombrePartida', 'NOMBRE DE PARTIDA:') }}
                        {{ Form::text('nombrePartida[]',null,array('id'=>'nombrePartida','class'=>'form-control mayuscula','title'=>'Nombre de Partida','disabled')) }}
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('rfc', 'R.F.C. :') }}
                        {{ Form::text('rfc[]',null,array('id'=>'rfc','maxlength'=>'15','required','class'=>'form-control mayuscula'. ( $errors->has('rfc.*') ? ' is-invalid' : '' ),'title'=>'R.F.C.')) }}
                        <div id="error_rfc" class="invalid-feedback">{{ $errors->first('rfc.*') }}</div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('importeParcial', 'IMPORTE PARCIAL:') }}
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>                                
                            {{ Form::text('importeParcial[]',null,array('id'=>'importeParcial','required','class'=>'form-control soloNumeros decimales'. ( $errors->has('importeParcial.*') ? ' is-invalid' : '' ),'title'=>'Importe parcial')) }}
                            <div id="error_importeParcial" class="invalid-feedback">{{ $errors->first('importeParcial.*') }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        {{ Form::label('nombre', 'NOMBRE:') }} 
                        {{ Form::text('nombre[]',null,array('id'=>'nombre','required','class'=>'form-control mayuscula'. ( $errors->has('nombre.*') ? ' is-invalid' : '' ),'title'=>'Nombre')) }}
                        <div id="error_nombre" class="invalid-feedback">{{ $errors->first('nombre.*') }}</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12">
                        {{ Form::label('concepto', 'CONCEPTO:') }}
                        {{ Form::textarea('concepto[]',null,array('id'=>'concepto','required','size' => '50x3','class'=>'form-control mayuscula'. ( $errors->has('concepto.*') ? ' is-invalid' : '' ),'title'=>'Concepto')) }}
                        <div id="error_concepto" class="invalid-feedback">{{ $errors->first('concepto.*') }}</div>
                    </div>
                </div>
                <hr id="plus" class="my-4">
                <div id="nuevoConcepto" class="col-md-12">
                </div>
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
<script src="{{ asset('plugins/Select2/js/select2.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var ordenes = "{{ route('ordenes.index') }}";

        $(".select2").select2({
            //theme: "bootstrap4"
        });

        $(document).on('focus', '.select2', function (e) {
            if (e.originalEvent) {
              $(this).siblings('select').select2('open');
            }
        });
        
        /*$(document).on('focusout', '.select2-container--open', function (e) {
            console.log('HOLAAAAA')
        });*/

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
            var concepto = '';
            concepto = concepto + '<div id="newConcepto_'+num+'" name="plusConcepto" class="row pb-3">';
            concepto = concepto + '<div class="col-3">{{ Form::label("proPresupuestal_'+num+'", "PROGRAMA PRESUPUESTAL:") }}<input type="text" value="'+$("#proPresupuestal").val()+'" class="form-control mayuscula {{ $errors->has("proPresupuestal.*") ? " is-invalid" : "" }}" title="Programa presupuestal" name="proPresupuestal[]" id="proPresupuestal_'+num+'" required disabled><div id="error_proPresupuestal_'+num+'" class="invalid-feedback">{{ $errors->first("proPresupuestal.*") }}</div></div>';
            concepto = concepto + '<div class="col-3">{{ Form::label("numPartida_'+num+'", "N° DE PARTIDA:") }}<select class="form-control select2 {{ $errors->has("numPartida.*") ? " is-invalid" : "" }}" id="numPartida_'+num+'" name="numPartida[]" title="Número de partida"  required>@foreach ($partidas2 as $par)<option value="{{ $par->id }}">{{ $par->codigo_obgasto }}</option>@endforeach</select><div id="error_numPrtida_'+num+'" class="invalid-feddback">{{ $errors->first("numPartida.*") }}</div></div>';
            concepto = concepto + '<div class="col-6">{{ Form::label("nombrePartida_'+num+'", "NOMBRE DE PARTIDA:") }}<input type="text" name="nombrePartida[]" class="form-control mayuscula" title="Nombre de Partida" id="nombrePartida_'+num+'" disabled></div></div>';
            concepto = concepto + '<div class="row pb-3"><div class="col-3">{{ Form::label('rfc', 'R.F.C. :') }}<input type="text" maxlength="15" class="form-control mayuscula {{ $errors->has("rfc.*") ? " is-invalid" : "" }}" title="R.F.C." name="rfc[]" id="rfc_'+num+'" required><div id="error_rfc" class="invalid-feedback">{{ $errors->first("rfc.*") }}</div></div>';
            concepto = concepto + '<div class="col-3">{{ Form::label("importeParcial_'+num+'", "IMPORTE PARCIAL:") }}<div class="input-group mb-2 mr-sm-2"><div class="input-group-prepend"><div class="input-group-text">$</div></div><input type="text" class="form-control soloNumeros decimales {{ $errors->has("importeParcial.*") ? " is-invalid" : "" }}" title="Importe parcial" name="importeParcial[]" id="importeParcial_'+num+'" required><div id="error_importeParcial_'+num+'" class="invalid-feedback">{{ $errors->first("importeParcial.*") }}</div></div></div>';
            concepto = concepto + '<div class="col-6">{{ Form::label('nombre', 'NOMBRE:') }}<input type="text" class="form-control mayuscula {{ $errors->has("nombre.*") ? " is-invalid" : "" }}" title="Nombre" name="nombre[]" id="nombre_'+num+'" required><div id="error_nombre" class="invalid-feedback">{{ $errors->first("nombre.*") }}</div></div></div>';
            concepto = concepto + '<div class="row pb-3"><div class="col-12">{{ Form::label("concepto_'+num+'", "CONCEPTO:") }}<textarea class="form-control mayuscula {{ $errors->has("concepto.*") ? " is-invalid" : "" }}" title="Concepto" cols="50" rows="3" name="concepto[]" id="concepto_'+num+'" required></textarea><div id="error_concepto_'+num+'" class="invalid-feedback">{{ $errors->first("concepto.*") }}</div></div></div>';
            concepto = concepto + '</div><hr class="my-1">';
            $("#nuevoConcepto").append(concepto);
            $(".select2").select2({
                //theme: "bootstrap4"
            });
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
            value = $('#numPartida').val();
            valuePartida = $('#nombrePartida').val();
            $('#numPartida_'+num).val(value).trigger('change.select2');
            $('#nombrePartida_'+num).val(valuePartida);
        });

        $(document).on('change', '.areas', function (e) {
            value = $('#area').val();
            $.ajax({
                type: 'GET',
                url: ordenes+'/getProgramaPresupuestal/'+value,
                dataType: 'json',
                success: function(data) {
                    var isMyObjectEmpty = !Object.keys(data).length;
                    if( isMyObjectEmpty == false ){
                        $('#proPresupuestal').val(data.proPresupuestal);
                        if( $('#proPresupuestal').val() ){
                            $( '#proPresupuestal' ).removeClass('is-invalid');
                            $( '#proPresupuestal' ).addClass('is-valid');
                        }
                    }
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    console.log('NO. '+errors);
                }
            });
        });
        $(document).on('change', '.gastos', function (e) {
            value = $('#numPartida').val();
            $.ajax({
                type: 'GET',
                url: ordenes+'/getObjetoGasto/'+value,
                dataType: 'json',
                success: function(data) {
                    var isMyObjectEmpty = !Object.keys(data).length;
                    if( isMyObjectEmpty == false ){
                        $("#nombrePartida").val(data.nombre_obgasto);
                    };
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    console.log('NO. '+errors);
                }
            });
        });
    });
</script>
@endsection