@extends('template.main')
@section('css')
   <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/css/select2.css') }}">
@endsection
@section('content')
{!! Form::model(null, ['id'=>'forminc','route' => ['ct.store'],'method' => 'POST']) !!}
    <div class="card">
        <div class="card-header"><h5>Editar registro de centro de trabajo :</h5></div>
        <div class="card-body">
            <div class="row">
               <div class="col-4 form-group">
                    {{Form::label('descripcion','Descripción:')}}
                    {{ Form::text('descripcion', null, array('class'=>'form-control','title'=>'Descripción', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-4 form-group">
                   {{Form::label('area','Área:')}}
                   {{ Form::text('area', null , array('class'=>'form-control','title'=>'Área', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-4 form-group">
                   {{Form::label('adscrip','Adscripción:')}}
                   {{ Form::select('adscrip',$areas,null,array('id'=>'adscrip','required','class'=>'form-control ','data-validation' => 'required','title'=>'Adscripción')) }}
                   
               </div> 
               {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg','id'=>'actualizarDepto']) !!} 
           
            
        </div>
    </div>
{!! Form::close() !!}


@endsection
@section('scripts')
<script src="{{ asset('plugins/Select2/js/select2.min.js') }}"></script>
<script>
 
  $('#adscrip').select2({    
    placeholder: "Selecciona una adscripción",
    allowClear: true,
    empty:true,
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