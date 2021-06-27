@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Lista de Posts</h1>

    <a class="btn btn-success btn-sm" href="{{route('admin.posts.create')}}">Agregar Posts</a>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
</div>
@endif
    @livewire('admin.post-index')    
   
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

