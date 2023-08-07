@extends('adminlte::page')

@section('title', 'Blog - moroni')

@section('content_header')
<a href="{{route('admin.posts.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo post</a>
    <h1>Listar Posts</h1>
@stop

@section('content')
    @if ( session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    @livewire('admin.posts-index')
@stop

