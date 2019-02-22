@extends('template.main')
@section('links')
   <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
   <script src="{{ asset ('bower_components/jquery/dist/jquery.min.js')}}"></script>
   <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
@endsection
@section('content')
{!! Form::model($ctrabajo, ['id'=>'forminc','route' => ['ct.edit', $ctrabajo->id],'method' => 'PUT']) !!}
    <div class="card">
        <div class="card-header"><h5>Editar registro de centro de trabajo : {{$ctrabajo}}</h5></div>
        <div class="card-body">
            <div class="row">
               <div class="col-4 form-group">
                    {{Form::label('plaza','Plaza:')}}
                    {{ Form::text('plaza', $ctrabajo->ordenDos, array('class'=>'form-control','title'=>'plaza', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-4 form-group">
                   {{Form::label('categoria','Categoría:')}}
                   {{ Form::text('categoria', old ('categoria'), array('class'=>'form-control','title'=>'categoria', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-4 form-group">
                   {{Form::label('sindicato','Sindicato:')}}
                   {{ Form::text('sindicato', old ('sindicato'), array('class'=>'form-control','title'=>'sindicato', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div> 
           
            
        </div>
    </div>
{!! Form::close() !!}

<script type="text/javascript">
$(".custom-select2").select2({
      theme: "classic",
      language: {
         noResults: function() {
         return "No hay resultado";        
      },
       searching: function() {
         return "Buscando..";
      }
   }
});
</script>
@endsection