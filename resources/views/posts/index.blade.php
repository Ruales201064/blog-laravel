<x-app-layout>

  <div class="container py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach ($posts as $post)
                   <article class="w-full h-80 bg-cover  bg-center @if($loop->first) md:col-span-2 lg:col-span-2  @endif" style="background-image:url(@if($post->image) {{Storage::url($post->Image->url)}}   @else https://cdn.pixabay.com/photo/2021/04/26/17/37/germany-6209610_960_720.jpg @endif)">
                     <div class="w-full h-full px-8 flex flex-col justify-center">
                     <div>
                        @foreach ($post->tags as $tag)
                            <a href="{{Route('posts.tag',$tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                        @endforeach
                     </div>
                     
                      <h1 class="text-4xl text-white leadin-8 font-bold mt-2">
                        <a href="{{route('posts.show',$post)}}">
                        {{$post->name}}  
                        </a>  
                      </h1> 


                       </div>  
                   </article>
          @endforeach
    </div>
  </div>


  <div class="ml-4">
      {{$posts->links()}}
  </div>
  </x-app-layout>  


  {{-- <x-app-layout>
  </x-app-layout> --}}