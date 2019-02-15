@extends('Template.main')

@section('css')

@endsection

@section('title')
    Órden de Pago
@endsection
@section('content')
    <!--<div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Solicitud Orden de Pago </h1>
            <hr class="my-4">
        </div>
    </div>-->
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
                            {{ Form::text('area',null,array('required','class'=>'form-control mayuscula','title'=>'Área que tramita')) }}
                            <div id="error_area"></div>
                        </div>
                        <div class="col-3">
                            {{ Form::label('tramite', 'TIPO DE TRÁMITE:') }}
                            {{ Form::select('tramite',$tipoTramite,null,array('required','class'=>'form-control','title'=>'Tipo de trámite')) }}
                            <div id="error_tramite"></div>
                        </div>
                        <!--<div class="col-3">
                            <label>SUJETO A COMPROBAR:</label>
                            <input type="text" name="password" class="form-control" placeholder="SUJETO A COMPROBAR" required="">
                        </div>
                        <div class="col-3">
                            <label>FONDO REVOLVENTE:</label>
                            <input type="text" name="password" class="form-control" placeholder="FONDO REVOLVENTE" required="">
                        </div>
                        <div class="col-3">
                            <label>COMPROBACION:</label>
                            <input type="text" name="password" class="form-control" placeholder="COMPROBACION" required="">
                        </div>-->
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
                            {{ Form::text('importeOrden',null,array('required','class'=>'form-control soloNumeros','title'=>'Importe de la orden')) }}
                            <div id="error_importeOrden"></div>
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
                            {{ Form::text('organizacion','401A06100',array('required','class'=>'form-control mayuscula','title'=>'Organización')) }}
                            <div id="error_organizacion"></div>
                        </div>
                        <div class="col-3">
                            {{ Form::label('proPresupuestal', 'PROGRAMA PRESUPUESTAL:') }}
                            {{ Form::text('proPresupuestal',null,array('required','class'=>'form-control mayuscula','title'=>'Programa presupuestal')) }}
                            <div id="error_proPresupuestal"></div>
                        </div>
                        <div class="col-3">
                            {{ Form::label('numPartida', 'N° DE PARTIDA:') }}
                            {{ Form::text('numPartida',null,array('required','class'=>'form-control soloNumeros','title'=>'Número de partida')) }}
                            <div id="error_numPrtida"></div>
                        </div>
                        <div class="col-3">
                            {{ Form::label('importeParcial', 'IMPORTE PARCIAL:') }}
                            {{ Form::text('importeParcial',null,array('required','class'=>'form-control soloNumeros','title'=>'Importe parcial')) }}
                            <div id="error_importeParcial"></div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">
                            {{ Form::label('concepto', 'CONCEPTO:') }}
                            {{ Form::textarea('concepto',null,array('required','size' => '50x3','class'=>'form-control mayuscula','title'=>'Concepto')) }}
                            <div id="error_concepto"></div>
                        </div>
                    </div>
                    <!-- {{-- {!! Form::submit('Guardar', ['class' => 'btn btn-primary','id'=>'guardarOrden']) !!} --}} -->
				{!! Form::close() !!}
                <div id="footer-buttons">
                    <button type="button" class="btn btn-primary" type="submit" id="guardarOrden">Guardar</button>
                </div>
            </div>
        </div>  
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var footerButtons         = $('#footer-buttons');
        var RouteStoreOrden     = "{!! route('ordenes.store') !!}";

        footerButtons.on('click', '#guardarOrden', function(event){
            var dataString = {
                area:               $('#area').val(),
                tramite:            $('#tramite').val(),
                numTramite:         $('#numTramite').val(),
                fechaElaboracion:   $('#fechaElaboracion').val(),
                oc:                 $('#oc').val(),
                fechaOC:            $('#fechaOC').val(),
                importeOrden:       $('#importeOrden').val(),
                letraImporte:       $('#letraImporte').val(),
                recepcion:          $('#recepcion').val(),
                fechaRecepcion:     $('#fechaRecepcion').val(),
                nombre:             $('#nombre').val(),
                primerAP:           $('#primerAP').val(),
                segundoAP:          $('#segundoAP').val(),
                rfc:                $('#rfc').val(),
                organizacion:       $('#organizacion').val(),
                proPresupuestal:    $('#proPresupuestal').val(),
                numPartida:         $('#numPartida').val(),
                importeParcial:     $('#importeParcial').val(),
                concepto:           $('#concepto').val()
            };
            $.ajax({
                type: 'POST',
                url: RouteStoreOrden,
                data: dataString,
                dataType: 'json',
                success: function(data){
                    //modal.modal('hide');
                    //table.bootstrapTable('refresh');
                    alert('GUARDADO');
                },
                error: function(data){
                    var errors = data.responseJSON;
                    console.log(errors);
                    var form = $("#formNewOrden")
                    if (form[0].checkValidity() === false) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    $.each(errors.errors, function(key, value){
                        $('#error_'+key).empty();
                        $('#error_'+key).addClass("invalid-feedback");
                        $('#error_'+key).append(value);
                    });
                    form.addClass('was-validated'); 
                }
            });
        });
    });
</script>
@endsection