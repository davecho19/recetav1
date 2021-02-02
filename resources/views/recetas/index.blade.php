@extends('layouts.app')
@section('botones')
    <a href={{route('recetas.create')}} class="btn btn-primary  mr-2 text-white ml-5">Crear Receta</a>
@endsection
@section('content')
    <h2 class="text-center mb-5">Administra tus Recetas</h5>
    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Título</th>
                    <th scole="col">Categoría</th>
                    <th scole="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($userRecetas as $userReceta)
                <tr>
                    <td>{{$userReceta->nombre}}</td>
                    <td>{{$userReceta->categoriaReceta->nombre}}</td>
                    <td>
                    <a href="" class="btn btn-success">Ver</a>
                    <a href="" class="btn btn-dark">Editar</a>
                    <a href="" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
@endsection
