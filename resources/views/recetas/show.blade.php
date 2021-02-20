@extends('layouts.app')
@section('content')
    {{--<h1>{{$receta}}</h1>--}}
    <article class="contenido-receta">
        <h1 class="text-center">{{$receta->nombre}}</h1>
        <div class="imagen-receta">
            <img src="/storage/{{$receta->imagen}}" class="w-100">
        </div>
        <div class="receta-data mt-2">
            <p>
                <span class="font-weight-bold text-primary">Categoria: </span>{{$receta->categoriaReceta->nombre}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Autor: </span>{{$receta->autor->name}}
            </p>

            <p>
                <span class="font-weight-bold text-primary">Fecha de creación: </span>
                {{date('d-m-y', strtotime($receta->created_at))}}
            </p>

        </div>

        <div class="ingredientes">
            <h2 class="my-3 text-primary">Ingredientes</h2>
            {!!$receta->ingredientes!!}
        </div>

        <div class="ingredientes">
            <h2 class="my-3 text-primary">Preparación</h2>
            {!!$receta->preparacion!!}
        </div>

    </article>
@endsection