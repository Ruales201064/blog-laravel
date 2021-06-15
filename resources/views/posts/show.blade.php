<x-app-layout>
    <div class="container py-8">
      <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
       
      <div class="text-lg text-black-500 mb-2">
           {{$post->extract}}
     </div>

     <div class="grid grid-cols-3">
         {{-- contenido principal --}}
       <div class="col-span-2">
         <figure>
            <img class="w-full h-80 object-cover object-center"   src="{{Storage::url($post->image->url)}}" alt="">
         </figure>

       <div class="text-base  text-black-50 mt-4">
         {{$post->body}}
       </div>

       </div>

       {{-- contenido relacionado --}}
       <aside>
         <h1>Mas en {{$post->category->name}}</h1>
       </aside>
     </div>

    </div>
</x-app-layout>   