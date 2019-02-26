@extends('Template.main')

@section('css')
<link href="{{ asset('plugins/Select2/css/Edit/select2.css') }}" rel="stylesheet">
<!--<link href="{{ asset('plugins/Select2/css/Bootstrap4/select2-bootstrap4.min.css') }}" rel="stylesheet">-->
@endsection

@section('title')
    Órden de Pago
@endsection
@section('content')
@if ($errors->any())
    <!--<div class="alert alert-danger">
        <ul>-->
            @if ($errors->has('*'))
                <?php $count = 0 ?>
                @foreach($errors->all() as $error)
                    @if($errors->has('proPresupuestal.'. $count .'') || $errors->has('idPartida.'. $count .'') || $errors->has('nombrePartida.'. $count .'') || $errors->has('rfc.'. $count .'') || $errors->has('importeParcial.'. $count .'') || $errors->has('nombre.'. $count .'') || $errors->has('concepto.'. $count .''))
                        <!--<li>{{-- $errors->first('proPresupuestal.'.$count.'') --}}</li>
                        <li>{{-- $errors->first('idPartida.'.$count.'') --}}</li>
                        <li>{{-- $errors->first('nombrePartida.'.$count.'') --}}</li>
                        <li>{{-- $errors->first('rfc.'.$count.'') --}}</li>
                        <li>{{-- $errors->first('importeParcial.'.$count.'') --}}</li>
                        <li>{{-- $errors->first('nombre.'.$count.'') --}}</li>
                        <li>{{-- $errors->first('concepto.'.$count.'') --}}</li>-->
                        <?php $count++ ?>
                    @endif
                @endforeach
                <div class="erroresRequest" id="{{ $count }}"></div>
            @endif
        <!--</ul>
    </div>-->
@endif
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
                        {{ Form::text('rpand',null,array('required','class'=>'form-control mayuscula'. ( $errors->has('rpand') ? ' is-invalid' : '' ),'title'=>'Realizar pago a nombre de')) }}
                        <div id="error_rpand" class="invalid-feedback">{{ $errors->first('rpand') }}</div>
                    </div>
                </div>
                <!-------------------------------------------------------------------------------------------------------------------------->
                <hr class="my-4">
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('proPresupuestal', 'PROGRAMA PRESUPUESTAL:') }}
                        {{ Form::text('proPresupuestal[]',null,array('id'=>'proPresupuestal','required','class'=>'form-control mayuscula'. ( $errors->has('proPresupuestal.0') ? ' is-invalid' : '' ),'title'=>'Programa presupuestal','required','readonly')) }}
                        <div id="error_proPresupuestal" class="invalid-feedback">{{ $errors->first('proPresupuestal.0') }}</div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('idPartida', 'NO. DE PARTIDA:') }}
                        {{ Form::select('idPartida[]',$partidas,null,array('id'=>'idPartida','class'=>'form-control select2 gastos'. ( $errors->has('idPartida.0') ? ' is-invalid' : '' ),'title'=>'Número de partida','required')) }}
                        <div id="error_numPartida" class="invalid-feedback">{{ $errors->first('idPartida.0') }}</div>
                    </div>
                    <div class="col-6">
                        {{ Form::label('nombrePartida', 'NOMBRE DE PARTIDA:') }}
                        {{ Form::text('nombrePartida[]',null,array('id'=>'nombrePartida','class'=>'form-control mayuscula'. ( $errors->has('nombrePartida.0') ? ' is-invalid' : '' ),'title'=>'Nombre de Partida','required','readonly')) }}
                        <div id="error_nombrePartida" class="invalid-feedback">{{ $errors->first('nombrePartida.0') }}</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        {{ Form::label('rfc', 'R.F.C. :') }}
                        {{ Form::text('rfc[]',null,array('id'=>'rfc','maxlength'=>'15','required','class'=>'form-control mayuscula'. ( $errors->has('rfc.0') ? ' is-invalid' : '' ),'title'=>'R.F.C.')) }}
                        <div id="error_rfc" class="invalid-feedback">{{ $errors->first('rfc.0') }}</div>
                    </div>
                    <div class="col-3">
                        {{ Form::label('importeParcial', 'IMPORTE PARCIAL:') }}
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>                                
                            {{ Form::text('importeParcial[]',null,array('id'=>'importeParcial','required','class'=>'form-control soloNumeros decimales'. ( $errors->has('importeParcial.0') ? ' is-invalid' : '' ),'title'=>'Importe parcial')) }}
                            <div id="error_importeParcial" class="invalid-feedback">{{ $errors->first('importeParcial.0') }}</div>
                        </div>
                    </div>
                    <div class="col-6">
                        {{ Form::label('nombre', 'NOMBRE:') }} 
                        {{ Form::text('nombre[]',null,array('id'=>'nombre','required','class'=>'form-control mayuscula'. ( $errors->has('nombre.0') ? ' is-invalid' : '' ),'title'=>'Nombre')) }}
                        <div id="error_nombre" class="invalid-feedback">{{ $errors->first('nombre.0') }}</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12">
                        {{ Form::label('concepto', 'CONCEPTO:') }}
                        {{ Form::textarea('concepto[]',null,array('id'=>'concepto','required','size' => '50x3','class'=>'form-control mayuscula'. ( $errors->has('concepto.0') ? ' is-invalid' : '' ),'title'=>'Concepto')) }}
                        <div id="error_concepto" class="invalid-feedback">{{ $errors->first('concepto.0') }}</div>
                    </div>
                </div>
                <!----------------------------------------------------------------------------------------------------------------------------------------------------------->
                <hr id="plus" class="my-4">
                <div id="nuevoConcepto" class="col-md-12">
                    @if ($errors->any())
                        @if ($errors->has('*'))
                            <?php $count = 1 ?>
                            @foreach($errors->all() as $error)
                                @if($errors->has('proPresupuestal.'. $count .'') || $errors->has('idPartida.'. $count .'') || $errors->has('nombrePartida.'. $count .'') || $errors->has('rfc.'. $count .'') || $errors->has('importeParcial.'. $count .'') || $errors->has('nombre.'. $count .'') || $errors->has('concepto.'. $count .''))
                                    <!--<li>{{-- $errors->first('rfc.'.$count.'') --}}</li>-->
                                        <div id="newConcepto_{{$count}}" name="plusConcepto" class="row pb-3">
                                            <div class="col-3">
                                                {{ Form::label('proPresupuestal_'.$count.'', 'PROGRAMA PRESUPUESTAL:') }}
                                                {{ Form::text('proPresupuestal[]',null,array('id'=>'proPresupuestal_'.$count.'','class'=>'form-control mayuscula'. ( $errors->has('proPresupuestal.'.$count.'') ? ' is-invalid' : '' ),'title'=>'Programa presupuestal','required','readonly')) }}
                                                <div id="error_proPresupuestal_{{$count}}" class="invalid-feedback">{{ $errors->first('proPresupuestal.'.$count.'') }}</div>
                                            </div>
                                            <div class="col-3">
                                                {{ Form::label('idPartida_'.$count.'', 'NO. DE PARTIDA:') }}
                                                {{ Form::select('idPartida[]',$partidas,null,array('id'=>'idPartida_'.$count.'','required','class'=>'form-control select2 gastos'. ( $errors->has('idPartida.'.$count.'') ? ' is-invalid' : '' ),'title'=>'Número de partida')) }}
                                                <div id="error_numPartida_{{$count}}" class="invalid-feedback">{{ $errors->first('idPartida.'.$count.'') }}</div>
                                            </div>
                                            <div class="col-6">
                                                {{ Form::label('nombrePartida_'.$count.'', 'NOMBRE DE PARTIDA:') }}
                                                {{ Form::text('nombrePartida[]',null,array('id'=>'nombrePartida_'.$count.'','class'=>'form-control mayuscula'. ( $errors->has('nombrePartida.'.$count.'') ? ' is-invalid' : '' ),'title'=>'Nombre de Partida','required','readonly')) }}
                                                <div id="error_nombrePartida_{{$count}}" class="invalid-feedback">{{ $errors->first('nombrePartida.'.$count.'') }}</div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-3">
                                                {{ Form::label('rfc_'.$count.'', 'R.F.C. :') }}
                                                {{ Form::text('rfc[]',null,array('id'=>'rfc_'.$count.'','maxlength'=>'15','class'=>'form-control mayuscula'. ( $errors->has('rfc.'.$count.'') ? ' is-invalid' : '' ),'title'=>'R.F.C.','required')) }}
                                                <div id="error_rfc_{{$count}}" class="invalid-feedback">{{ $errors->first('rfc.'.$count.'') }}</div>
                                            </div>
                                            <div class="col-3">
                                                {{ Form::label('importeParcial_'.$count.'', 'IMPORTE PARCIAL:') }}
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">$</div>
                                                    </div>                                
                                                    {{ Form::text('importeParcial[]',null,array('id'=>'importeParcial_'.$count.'','class'=>'form-control soloNumeros decimales'. ( $errors->has('importeParcial.'.$count.'') ? ' is-invalid' : '' ),'title'=>'Importe parcial','required')) }}
                                                    <div id="error_importeParcial_{{$count}}" class="invalid-feedback">{{ $errors->first('importeParcial.'.$count.'') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                {{ Form::label('nombre_'.$count.'', 'NOMBRE:') }} 
                                                {{ Form::text('nombre[]',null,array('id'=>'nombre_'.$count.'','class'=>'form-control mayuscula'. ( $errors->has('nombre.'.$count.'') ? ' is-invalid' : '' ),'title'=>'Nombre','required')) }}
                                                <div id="error_nombre_{{$count}}" class="invalid-feedback">{{ $errors->first('nombre.'.$count.'') }}</div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-12">
                                                {{ Form::label('concepto_'.$count.'', 'CONCEPTO:') }}
                                                {{ Form::textarea('concepto[]',null,array('id'=>'concepto_'.$count.'','size' => '50x3','class'=>'form-control mayuscula'. ( $errors->has('concepto.'.$count.'') ? ' is-invalid' : '' ),'title'=>'Concepto','required')) }}
                                                <div id="error_concepto_{{$count}}" class="invalid-feedback">{{ $errors->first('concepto.'.$count.'') }}</div>
                                            </div>
                                        </div>
                                    <hr class="my-1">
                                    <?php $count++ ?>
                                @endif
                            @endforeach
                        @endif
                    @endif
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
<script src="{{ asset('plugins/Select2/js/select2.full.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var ordenes = "{{ route('ordenes.index') }}";
        var errores = "{{ $errors->has('*') }}";

        $(".select2").select2({
            //theme: "bootstrap4"
        });

        $(document).on('focus', '.select2', function (e) {
            if (e.originalEvent) {
              $(this).siblings('select').select2('open');
            }
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
        
        $(document).on('focus', '#select2-area', function (e) {
            if( $('#select2-area-container').attr("title") != 'SELECCIONE UNA OPCIÓN' ){
                $('#select2-area').removeClass('is-invalid');
                $('#select2-area').addClass('is-valid');
            }else{
                $('#select2-area').removeClass('is-valid');
                $('#select2-area').addClass('is-invalid');
            }
        });
        $(document).on('focus', '#select2-tramite', function (e) {
            if( $('#select2-tramite-container').attr("title") != 'SELECCIONE UNA OPCIÓN' ){
                $('#select2-tramite').removeClass('is-invalid');
                $('#select2-tramite').addClass('is-valid');
                $('#error_tramite').hide();
            }else{
                $('#select2-tramite').removeClass('is-valid');
                $('#select2-tramite').addClass('is-invalid');
                $('#error_tramite').show();
            }
        });
        $(document).on('focus', '#select2-idPartida', function (e) {
            if( $('#select2-idPartida-container').attr("title") != 'SELECCIONE UNA OPCIÓN' ){
                $('#select2-idPartida').removeClass('is-invalid');
                $('#select2-idPartida').addClass('is-valid');
            }else{
                $('#select2-idPartida').removeClass('is-valid');
                $('#select2-idPartida').addClass('is-invalid');
            }
        });
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
            concepto = concepto + '<div class="col-3">{{ Form::label("proPresupuestal_'+num+'", "PROGRAMA PRESUPUESTAL:") }}<input type="text" value="'+$("#proPresupuestal").val()+'" class="form-control mayuscula {{ $errors->has("proPresupuestal.'+num+'") ? " is-invalid" : "" }}" title="Programa presupuestal" name="proPresupuestal[]" id="proPresupuestal_'+num+'" required readonly><div id="error_proPresupuestal_'+num+'" class="invalid-feedback">{{ $errors->first("proPresupuestal.'+num+'") }}</div></div>';
            concepto = concepto + '<div class="col-3">{{ Form::label("idPartida_'+num+'", "N° DE PARTIDA:") }}<select class="form-control select2 {{ $errors->has("idPartida.'+num+'") ? " is-invalid" : "" }}" id="idPartida_'+num+'" name="idPartida[]" title="Número de partida"  required>@foreach ($partidas2 as $par)<option value="{{ $par->id }}">{{ $par->codigo_obgasto }}</option>@endforeach</select><div id="error_numPartida_'+num+'" class="invalid-feddback">{{ $errors->first("idPartida.'+num+'") }}</div></div>';
            concepto = concepto + '<div class="col-6">{{ Form::label("nombrePartida_'+num+'", "NOMBRE DE PARTIDA:") }}<input type="text" name="nombrePartida[]" class="form-control mayuscula" title="Nombre de Partida" id="nombrePartida_'+num+'" readonly></div></div>';
            concepto = concepto + '<div class="row pb-3"><div class="col-3">{{ Form::label("rfc_'+num+'", "R.F.C. :") }}<input type="text" maxlength="15" class="form-control mayuscula {{ $errors->has("rfc.'+num+'") ? " is-invalid" : "" }}" title="R.F.C." name="rfc[]" id="rfc_'+num+'" required><div id="error_rfc_'+num+'" class="invalid-feedback">{{ $errors->first("rfc.'+num+'") }}</div></div>';
            concepto = concepto + '<div class="col-3">{{ Form::label("importeParcial_'+num+'", "IMPORTE PARCIAL:") }}<div class="input-group mb-2 mr-sm-2"><div class="input-group-prepend"><div class="input-group-text">$</div></div><input type="text" class="form-control soloNumeros decimales {{ $errors->has("importeParcial.'+num+'") ? " is-invalid" : "" }}" title="Importe parcial" name="importeParcial[]" id="importeParcial_'+num+'" required><div id="error_importeParcial_'+num+'" class="invalid-feedback">{{ $errors->first("importeParcial.'+num+'") }}</div></div></div>';
            concepto = concepto + '<div class="col-6">{{ Form::label("nombre'+num+'", "NOMBRE:") }}<input type="text" class="form-control mayuscula {{ $errors->has("nombre.'+num+'") ? " is-invalid" : "" }}" title="Nombre" name="nombre[]" id="nombre_'+num+'" required><div id="error_nombre" class="invalid-feedback">{{ $errors->first("nombre.'+num+'") }}</div></div></div>';
            concepto = concepto + '<div class="row pb-3"><div class="col-12">{{ Form::label("concepto_'+num+'", "CONCEPTO:") }}<textarea class="form-control mayuscula {{ $errors->has("concepto.'+num+'") ? " is-invalid" : "" }}" title="Concepto" cols="50" rows="3" name="concepto[]" id="concepto_'+num+'" required></textarea><div id="error_concepto_'+num+'" class="invalid-feedback">{{ $errors->first("concepto.'+num+'") }}</div></div></div>';
            concepto = concepto + '</div><hr class="my-1">';
            $("#nuevoConcepto").append(concepto);
            $("#idPartida_"+num).select2({
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

            $(document).on('change', '#idPartida_'+num, function (e) {
                value = $('#idPartida_'+num).val();
                $.ajax({
                    type: 'GET',
                    url: ordenes+'/getObjetoGasto/'+value,
                    dataType: 'json',
                    success: function(data) {
                        var isMyObjectEmpty = !Object.keys(data).length;
                        if( isMyObjectEmpty == false ){
                            $('#nombrePartida_'+num).val(data.nombre_obgasto);
                        };
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        console.log('NO. '+errors);
                    }
                });
            });
            $(document).on('focus', '#select2-idPartida_'+num, function (e) {
                if( $('#select2-idPartida_'+num+'-container').attr("title") != 'SELECCIONE UNA OPCIÓN' ){
                    $('#select2-idPartida_'+num).removeClass('is-invalid');
                    $('#select2-idPartida_'+num).addClass('is-valid');
                }else{
                    $('#select2-idPartida_'+num).removeClass('is-valid');
                    $('#select2-idPartida_'+num).addClass('is-invalid');
                }
            });
        });
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
                        /*if( $('#proPresupuestal').val() ){
                            $( '#proPresupuestal' ).removeClass('is-invalid');
                            $( '#proPresupuestal' ).addClass('is-valid');
                        }*/
                    }
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    console.log('NO. '+errors);
                }
            });
        });

        $(document).on('change', '#idPartida', function (e) {
            value = $('#idPartida').val();
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

        if( errores ){
            var errorRequest = $('.erroresRequest').attr("id");
            if( errorRequest > 0 ){
                for (i = 1; i < errorRequest; i++) {
                    //$('#otroConcepto').trigger('click');
                }
            }
        }
    });
</script>
@endsection