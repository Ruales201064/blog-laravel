@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Crear Post</h1>
@stop

@section('content')
 @if (session('info'))
      <div class="alert alert-success">
          <strong>{{session('info')}}</strong>
      </div>
 @endif

  <div class="card">
  <div class="card-body">
      {!! Form::open(['route'=>'admin.posts.store','autocomplete'=>'off']) !!}
      
       <div class="form-group">
         {!! Form::label('name', 'Nombre:') !!}
         {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Post']) !!}
       </div>

       <div class="form-group">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el Slug del Post','readonly']) !!}
      
      </div>

      <div class="form-group">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::select('category_id', $categories,null, ['class'=>'form-control']) !!}
      
      </div>



      
       {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
      {!! Form::close() !!}
</div> 

</div>
@stop

@section('js')
 <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script> 

<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});

</script>
 @endsection