@extends('template.main')
@section('links')
   <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
   <script src="{{ asset ('bower_components/jquery/dist/jquery.min.js')}}"></script>
   <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
@endsection
@section('content')
{!! Form::model($ctrabajo, ['id'=>'forminc','route' => ['ct.update', $ctrabajo->id],'method' => 'PUT']) !!}
<input type="hidden" name="idCtrabajo" value="{{$ctrabajo->id}}">
    <div class="card">
        <div class="card-header"><h5>Editar registro de centro de trabajo : {{$ctrabajo->descripcionCT}}</h5></div>
        <div class="card-body">
            <div class="row">
               <div class="col-4 form-group">
                    {{Form::label('descripcion','Descripción:')}}
                    {{ Form::text('descripcion', $ctrabajo->descripcionCT, array('class'=>'form-control','title'=>'Descripción', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-4 form-group">
                   {{Form::label('area','Área:')}}
                   {{ Form::text('area',  $ctrabajo->cTDepende, array('class'=>'form-control','title'=>'Área', 'data-validation' => 'custom', 'data-validation-regexp' => '^([a-záéíóú A-ZÁÉÑÍÓÚ 0-9][\s]*){1,40}$', 'required')) }}
               </div>
               <div class="col-4 form-group">
                   {{Form::label('adscrip','Adscripción:')}}
                   {{ Form::select('adscrip',$areas,$ctrabajo->area->id,array('id'=>'adscrip','required','class'=>'form-control select2','title'=>'Adscripción')) }}
                   
               </div> 
               {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg','id'=>'actualizarDepto']) !!} 
           
            
        </div>
    </div>
{!! Form::close() !!}


@endsection