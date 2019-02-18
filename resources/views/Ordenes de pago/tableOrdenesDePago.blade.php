@extends('Template.main')

@section('css')

@endsection

@section('title')
    Órden de Pago
@endsection
@section('content')

<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<td>No. trámite</td>
			<td>Fecha de elaboración</td>
			<td>Ver</td>
		</tr>
	</table>
</div>
	@if ($ordenes->isEmpty())
	@else
		@foreach($ordenes as $orden)
			<td>{{$orden->noTramite}}</td>a
			<td>{{$orden->fechaEla}}</td>
			<td><a href="" class="btn btn-primary" >Ver</a></td>
		@endforeach
	@endif
@endsection
@section('scripts')
<script src="{{ asset('plugins/BootstrapTable/js/bootstrap-table.min.js') }}"></script>
@endsection