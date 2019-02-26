@extends('Template.main')

@section('css')

@endsection

@section('title')
    Solicitud de viáticos
@endsection
@section('content')
<div class="card">
  	<div class="card-header">
  		<div class="row"><div  class="col-md-8">
			Tabla de solicitudes de viáticos
		</div>
			<div class="col-md-2 fa-2x">
				<a href="{{route('tarSol.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nueva Solicitud</a>
			</div>
		</div>
		</div>
  	
  <div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" style="width: 100%">
			<tr>
				<td>Folio</td>
				<td>Datos</td>
			</tr>
			@foreach($solicitudes as $solicitud)
			<tr>				
				<td>{{$solicitud->folio}}</td>
				<td>{{$solicitud->datos}}</td>
			</tr>
			@endforeach

		</table>
	</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('plugins/BootstrapTable/js/bootstrap-table.min.js') }}"></script>
@endsection