@extends('layouts.app')

@section('botones')
    <a href={{route('recetas.index')}} class="btn btn-primary  mr-2 text-white ml-5">Lista Recetas</a>
@endsection

@section('content')
    <h2 class="text-center mb-5"> Crear Nueva Receta</h2>
    {{$categorias}}
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <form method="POST" action="{{route('recetas.store')}}" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre Receta</label>
                        <input type="text" name="nombre" class="form-control @error('nombre')
                            is-invalid
                        @enderror"  
                        id="nombre" placeholder="Nombre Receta" value={{old('nombre')}}>
                        @error('nombre')
                            <span class="invalid-feedback d-block" role="alert"> 
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Agregar Receta" />
                    </div>
                </form>
            </div>
        </div>
@endsection