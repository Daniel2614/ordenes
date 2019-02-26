@extends('template.main')
@section('css')
   <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/css/select2.css') }}">
@endsection
@section('content')
<div class="card">
  	<div class="card-header">
  		<div class="row">
  			<div  class="col-md-8">
				<h5>Crear nueva solicitud de viáticos</h5>
			</div>
			
		</div>
	</div>
  	
	<div class="card-body">
		<div class="row">
               <div class="col-6 form-group">
                    {{Form::label('para','Destinatario:')}}
                    {{ Form::text('para', null, array('class'=>'form-control','title'=>'Destinatario', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-6 form-group">
                    {{Form::label('puestoPara','Puesto de destinatario:')}}
                    {{ Form::text('puestoPara', null, array('class'=>'form-control','title'=>'Puesto de destinatario', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-6 form-group">
                    {{Form::label('fecha','Fecha:')}}
                    {{ Form::date('fecha', null, array('class'=>'form-control','title'=>'Fecha', 'data-validation' => 'required', 'required')) }}
               </div>
               <div class="col-6 form-group">
                    {{Form::label('folio','Folio/comisión:')}}
                    {{ Form::text('folio', null, array('class'=>'form-control','title'=>'Folio', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-12 form-group">
                    {{Form::label('descripcion','Descripción:')}}
                    {{ Form::textarea('descripcion', null, array('class'=>'form-control','title'=>'Descripcion', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>


        </div>
	</div>
</div>
@endsection