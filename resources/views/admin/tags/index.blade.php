@extends('adminlte::page')

@section('title', 'Blog - moroni')

@section('content_header')
    <a href="{{route('admin.tags.create')}}" class="btn btn-secondary btn-sm float-right">Agregar categoria</a>
    <h1>Mostrar listado de etiquetas</h1>
@stop

@section('content')

@if ( session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="card">
    <div class="card-body">
        <table class="table table-strped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td width="10px">
                            <a href="{{route('admin.tags.edit', $tag)}}" class="btn btn-primary btn-sm" >Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

