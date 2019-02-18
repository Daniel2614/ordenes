@extends('Template.main')

@section('css')

@endsection

@section('title')
    Ordenes de Pago
@endsection
@section('content')

<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<td>No. trámite</td>
			<td>Fecha de elaboración</td>
			<td>Ver</td>
		</tr>
	
	@if ($ordenes->isEmpty())
	@else
		@foreach($ordenes as $orden)
			<tr>
				<td>{{$orden->noTramite}}</td>
				<td>{{$orden->fechaEla}}</td>
				<td><a href="{{url('orden')}}/{{$orden->id}}" class="btn btn-primary" >Ver</a></td>
			</tr>
		@endforeach
	@endif
	</table>
</div>
@endsection
@section('scripts')
<script src="{{ asset('plugins/BootstrapTable/js/bootstrap-table.min.js') }}"></script>
@endsection