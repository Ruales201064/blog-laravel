@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>['admin.categories.update', $category]]) !!}
           <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese El Nombre']) !!}
              @error('name')
                  <span class="text-danger">{{$message}}</span>
              @enderror
              </div>
  
           <div class="form-group">
              {!! Form::label('slug', 'Slug') !!}
              {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese El Slug','readonly']) !!}
            
              @error('slug')
              <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
  
         {!! Form::submit('Actualizar', ['class'=>'btn btn-warning']) !!}
        {!! Form::close() !!}
  </div> 
  
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop