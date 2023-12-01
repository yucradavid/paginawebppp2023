<!-- resources/views/dropdown/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Menú Desplegable</h1>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Opción 1</a>
                <a class="dropdown-item" href="#">Opción 2</a>
                <a class="dropdown-item" href="#">Opción 3</a>
            </div>
        </div>
    </div>
@endsection
