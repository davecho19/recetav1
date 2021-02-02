@extends('layouts.app')
@section('content')
    {{--<h1>{{$receta}}</h1>--}}
    <article class="contenido-receta">
        <h1 class="text-center">{{$receta->nombre}}</h1>
        <div class="imagen-receta">
            <img src="/storage/{{$receta->imagen}}" class="w-100">
        </div>
        <div class="receta-data">
            <p>
                <span class="font-weight-bold text-primary">Categoria: </span>{{$receta->categoriaReceta->nombre}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Autor: </span>{{$receta->user_id}}
            </p>
        </div>
    </article>
@endsection