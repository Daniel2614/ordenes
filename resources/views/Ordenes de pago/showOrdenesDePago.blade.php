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
                {!! Form::open(['novalidate','class'=>'needs-validation','url' => '#']) !!}
                    <div class="row pb-3">
                        <div class="col-9">
                            {{ Form::label('area', 'ÁREA QUE TRAMITA:') }}
                            {{ Form::text('area',null,array('required','class'=>'form-control','title'=>'Área que tramita')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('tramite', 'TIPO DE TRÁMITE:') }}
                            {{ Form::text('tramite','ÓRDEN DE PAGO',array('required','class'=>'form-control','title'=>'Tipo de trámite')) }}
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
                            {{ Form::text('numTramite',null,array('required','class'=>'form-control','title'=>'Número de trámite')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('fechaElaboracion', 'FECHA DE ELABORACIÓN:') }}
                            {{ Form::date('fechaElaboracion',null,array('required','class'=>'form-control','title'=>'Fecha de elaboración')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('oc', 'O.C. :') }}
                            {{ Form::text('oc',null,array('required','class'=>'form-control','title'=>'')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('fechaOC', 'FECHA:') }}
                            {{ Form::date('fechaOC',null,array('required','class'=>'form-control','title'=>'Fecha')) }}
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-3">
                            {{ Form::label('importeOrden', 'IMPORTE DE LA ORDEN:') }}
                            {{ Form::text('importeOrden',null,array('required','class'=>'form-control','title'=>'Importe de la orden')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('letraImporte', 'LETRA DE IMPORTE:') }}
                            {{ Form::text('letraImporte',null,array('required','class'=>'form-control','title'=>'Letra de importe')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('recepcion', 'RECEPCIÓN:') }}
                            {{ Form::text('recepcion',null,array('required','class'=>'form-control','title'=>'Recepción')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('fechaRecepcion', 'FECHA:') }}
                            {{ Form::date('fechaRecepcion',null,array('required','class'=>'form-control','title'=>'Fecha')) }}
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row pb-3">
                        <div class="col-3">
                            {{ Form::label('nombre', 'NOMBRE(S):') }}
                            {{ Form::text('nombre',null,array('required','class'=>'form-control','title'=>'Nombre(s) de la persona')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('primerAP', 'PRIMER APELLIDO:') }}
                            {{ Form::text('primerAP',null,array('required','class'=>'form-control','title'=>'Primer apellido de la persona')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('segundoAP', 'SEGUNDO APELLIDO:') }}
                            {{ Form::text('segundoAP',null,array('required','class'=>'form-control','title'=>'Segundo apellido de la persona')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('rfc', 'R.F.C. :') }}
                            {{ Form::text('rfc',null,array('required','class'=>'form-control','title'=>'R.F.C. de la persona')) }}
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row pb-3">
                        <div class="col-3">
                            {{ Form::label('organizacion', 'ORGANIZACIÓN:') }}
                            {{ Form::text('organizacion','401A06100',array('required','class'=>'form-control','title'=>'Organización')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('proPresupuestal', 'PROGRAMA PRESUPUESTAL:') }}
                            {{ Form::text('proPresupuestal',null,array('required','class'=>'form-control','title'=>'Programa presupuestal')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('numPartida', 'N° DE PARTIDA:') }}
                            {{ Form::text('numPartida',null,array('required','class'=>'form-control','title'=>'Número de partida')) }}
                        </div>
                        <div class="col-3">
                            {{ Form::label('importeParcial', 'IMPORTE PARCIAL:') }}
                            {{ Form::text('importeParcial',null,array('required','class'=>'form-control','title'=>'Importe parcial')) }}
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-12">
                            {{ Form::label('concepto', 'CONCEPTO:') }}
                            {{ Form::textarea('concepto',null,array('required','size' => '50x3','class'=>'form-control','title'=>'Concepto')) }}
                        </div>
                    </div>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary','id'=>'botonSubmit']) !!}
				{!! Form::close() !!}
            </div>
        </div>  
    </div>
@endsection

@section('scripts')

@endsection