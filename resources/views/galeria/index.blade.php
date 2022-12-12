@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css')}}">


    <!--<div class="flex text-center">

        @foreach ($images as $row)
            <img class="img-fluid rounded img-thumbnail" src="images/{{ $row->imagenes}}" alt="Image">
        @endforeach
    </div>-->
    @foreach ($images as $row)
        <div class="galeria">
            <div class="foto">
                <img class="img-fluid rounded img-thumbnail" src="images/{{ $row->imagenes}}" alt="Image">
            </div>
            <div class="pie">
                <h3>{{ $row->publicacion->titulo }}</h3>
                <p>{{ $row->publicacion->descripcion }}</p>
            </div>
        </div>

    @endforeach



@endsection
