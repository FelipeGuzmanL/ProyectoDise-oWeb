@extends('layouts.app')
@section('content')

    <h1>Galería de Diseños</h1>
    <div class="galeria-img">
        @foreach ($images as $row)
            <a href="#image{{$row->id}}"><img class="img-fluid rounded img-thumbnail" src="images/{{ $row->imagenes}}" alt="Image"></a>
        @endforeach
    </div>

    @foreach ($images as $item)
        <article class="light-box" id="image{{$item->id}}">
            <a href="#image{{$item->id-1}}" class="next"><i class="fa-solid fa-arrow-left"></i></a>
            @foreach ($images as $i => $imagenes)
                @if ($i<=0)
                    <img src="images/{{ $item->imagenes}}" alt="">
                @endif
            @endforeach
            <a href="#image{{$item->id+1}}" class="next"><i class="fa-solid fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
    @endforeach

    @include('footer')
@endsection
