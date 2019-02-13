@extends('Template.main')
@section('title')
    Ordenes de Pago
@endsection
@section('content')
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	         <meta name="csrf-token" content="{{ csrf_token() }}" />
	        <title>Laravel</title>
	        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}" >
	    </head>
	    <body>
	       <div class="container">
	           <div class="jumbotron">
	              <h1 class="display-4 text-center">Solicitud Orden de Pago </h1>
	              <hr class="my-4">
	           </div>
	       </div>
	       <div class="container">
				<div class="card">
			    	<div class="card-header">
			    		<h5>Captura Orden de Pago</h5>
			    	</div>
			    			<div class="card-body">
						      <form>
							      <div class="row pb-3">
							                <div class="col-12">
							                <label>ÁREA QUE TRAMITA:</label>
							                <input type="text" name="Nombre" class="form-control" placeholder="ÁREA QUE TRAMITA" required="">
							            </div>
							      </div>
								  <div class="row pb-3">
							            <div class="col-3">
							                <label>TIPO DE TRAMITE:</label>
							                <input type="text" name="password" class="form-control" placeholder="tipo de tramite" required="">
							            </div>
							            <div class="col-3">
							                <label>SUJETO A COMPROBAR:</label>
							                <input type="text" name="password" class="form-control" placeholder="SUJETO A COMPROBAR" required="">
							            </div>
							            <div class="col-3">
							                <label>FONDO REVOLVENTE:</label>
							                <input type="text" name="password" class="form-control" placeholder="FONDO REVOLVENTE" required="">
							            </div>
							            <div class="col-3">
							                <label>COMPROBACIÓN:</label>
							                <input type="text" name="password" class="form-control" placeholder="COMPROBACIÓN" required="">
							            </div>
							      </div>
								  <div class="row pb-3">
							            <div class="col-3">
							                <label>N° TRAMITE:</label>
							                <input type="text" name="email" class="form-control" placeholder="TRAMITE" required="">
							            </div>
							            <div class="col-3">
							                <label>FECHA DE ELABORACIÓN:</label>
							                <input type="date" name="email" class="form-control" placeholder="FECHA" required="">
							            </div>
							            <div class="col-3">
							                <label>O.C:</label>
							                <input type="text" name="email" class="form-control" placeholder="O.C." required="">
							            </div>
							            <div class="col-3">
							                <label>FECHA:</label>
							                <input type="date" name="email" class="form-control" placeholder="FECHA" required="">
							            </div>
							       </div>   
							       <div class="row pb-3">
							            <div class="col-3">
							                <label>IMPORTE DE LA ORDEN:</label>
							                <input type="text" name="email" class="form-control" placeholder="IMPORTE" required="">
							            </div>

							            <div class="col-3">
							                <label>LETRA DE IMPORTE:</label>
							                <input type="text" name="email" class="form-control" placeholder="LETRA DE IMPORTE" required="">
							            </div>
							            <div class="col-3">
							                <label>RECEPCIÓN:</label>
							                <input type="text" name="email" class="form-control" placeholder="RECEPCIÓN" required="">
							            </div>
							            <div class="col-3">
							                <label>FECHA:</label>
							                <input type="date" name="email" class="form-control" placeholder="FECHA" required="">
							            </div>
							       	</div>
						            <div class="form-group">
						            </div>
						      </form>
			      			</div>
	    
	    		</div>
	  
			</div>
	    </body>
	  
	</html>

@endsection