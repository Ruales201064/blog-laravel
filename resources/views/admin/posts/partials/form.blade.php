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
    {!! Form::radio('status', 2, false) !!}
     Borrador
   </label>

   <label>
    {!! Form::radio('status', 1, true) !!}  
     Publicado
   </label>
   
   @error('status')
   <br>
   <small  class="text-danger">{{$message}}</small>
   @enderror
 </div>



 <div class="row mb-3">
   <div class="col">
         <div class="image-wrapper">
           @isset ($post->image)
           <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
          
          @else
          <img id="picture" src="https://cdn.pixabay.com/photo/2021/04/26/17/37/germany-6209610_960_720.jpg" alt="">
           @endisset
         </div>
   </div>
   <div class="col">
    <div class="form-group">
         {!! Form::label('file', 'imagen') !!}
         {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
         @error('file')
         <span class="text-danger">{{$message}}</span>
     @enderror
   </div>
    
    <p>Por favor ingrese una imagen menor a los 24 mg</p>
   </div>
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
