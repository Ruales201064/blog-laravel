@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Lista de Posts</h1>
@stop

@section('content')
    @livewire('admin.post-index')    

   @if (session('info'))
          <div class="alert alert-danger">
              <strong>{{session('info')}}</strong>
          </div>   
   @endif

   <div class="card">      
    <div class="card-header">
        <a class="btn btn-success" href="{{route('admin.posts.create')}}">Agregar Posts</a>
    </div>
        <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Extract</th>
                    {{-- <th>Body</th> --}}
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td>{{$post->extract}}</td>
                            {{-- <td>{{$post->body}}</td> --}}
                            <td width="10px">
                               <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.posts.destroy',$post)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
            </tbody>

        </table>
        </div>
   </div>    

@stop

