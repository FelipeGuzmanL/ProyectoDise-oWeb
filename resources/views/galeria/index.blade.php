@extends('layouts.app')
@section('content')


    <div class="flex text-center">

        @foreach ($images as $row)
            <img class="img-fluid rounded img-thumbnail" src="images/{{ $row->imagenes}}" alt="Image">
        @endforeach     
    </div>


@endsection