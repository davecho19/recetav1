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
                <tr>
                    <td>Pizza de camarones</td>
                    <td>Pizzas</td>
                    <td>......</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
