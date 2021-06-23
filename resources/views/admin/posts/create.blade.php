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
        
      {!! Form::hidden('user_id',auth()->user()->id) !!}
       <div class="form-group">
         {!! Form::label('name', 'Nombre:') !!}
         {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Post']) !!}
           @error('name')
               <small  class="text-danger">{{$message}}</small>
           @enderror
        </div>

       <div class="form-group">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el Slug del Post','readonly']) !!}
      
    @error('slug')
        <small  class="text-danger">{{$message}}</small>
    @enderror
      </div>

      <div class="form-group">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::select('category_id', $categories,null, ['class'=>'form-control']) !!}
        @error('category_id')
        <small  class="text-danger">{{$message}}</small>
    @enderror

      </div>

        <div class="form-group">
          
            <p class="font-weight-bold">Etiquetas</p>
            @foreach ($tags as $tag)
                 <label class="mr-2">
                   {!! Form::checkbox('tags[]', $tag->id, null) !!}
                   {{$tag->name}}
                 </label>
            @endforeach
            
          
          @error('tags')
          <br>
          <small  class="text-danger">{{$message}}</small>
          @enderror
        </div>


        <div class=form-group>
          <p class="font-weight-bold">Estado</p>
          <label>
            {!! Form::radio('status', 1, true) !!}
            Borrador
          </label>

          <label>
            {!! Form::radio('status', 2, false) !!}
            Publicado
          </label>

          <div class="row">
              <div class="col">
               <div class="image-wrapper">
                <img src="https://cdn.pixabay.com/photo/2021/04/26/17/37/germany-6209610_960_720.jpg" alt="">

               </div>
              </div>
                <div></div>
            </div>

          
          @error('status')
          <br>
          <small  class="text-danger">{{$message}}</small>
          @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('extract', 'Extracto:') !!}
            {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}
            @error('extract')
            <small  class="text-danger">{{$message}}</small>
            @enderror
          </div>

        <div class="form-group">
          {!! Form::label('body', 'Cuerpo:') !!}
          {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
          @error('body')
            <small  class="text-danger">{{$message}}</small>
            @enderror
        </div>

      
       {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
      {!! Form::close() !!}
</div> 

</div>
@stop





@section('css')
    <style>
      .image-wrapper{
        position: relative;
        padding-bottom: 56.23%;
      }
    </style>
    @stop

@section('js')
 <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script> 
 <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});

ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );


        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
 @endsection