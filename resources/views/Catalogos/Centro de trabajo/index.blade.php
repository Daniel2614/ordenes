@extends('template.main')

@section('title')
    Departamentos
@endsection
@section('content')

	<div class="card">
		<div class="card-header ">
			
			<div class="row"><div  class="col-md-8">
				Tabla de departamentos
			</div>
			<div class="col-md-2 fa-2x">
				<a href="{{route('ct.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Departamento</a>
			</div></div>
		</div>
		<div class="card-body">
			
			<div class="table-responsive">

				<table class="table table-bordered">
					<tr>
						<td>Departamento de enlace</td>
						<td>Área</td>
						<td>Adscripción</td>
						<td>Editar</td>
					</tr>
					@foreach ($centros as $centro)
						<tr>
							<td>{{$centro->descripcionCT}}</td>
							<td>{{$centro->cTDepende}}</td>
							<td>{{$centro->area->descripcion}}</td>
							<td>
								<a href="{{route('ct.edit',$centro->id)}}" class="btn btn-primary" >Editar</a>
							</td>
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