@extends('layouts.app')
@section('content')

<div class="container-form2">
    <form action="" method="POST" class="" enctype="multipart/form-data">
        @csrf
        <input type="text" class="campo" id="titulo" name="titulo" placeholder="Título Publicación">
        @if ($errors->has('titulo'))
            <p class="p-2 mb-2 bg-danger text-white rounded">{{ $errors->first('titulo') }}</p>
        @endif
        <textarea type="text" class="campo" id="descripcion" name="descripcion" placeholder="Mensaje"></textarea>
        @if ($errors->has('descripcion'))
                <p class="p-2 mb-2 bg-danger text-white rounded">{{ $errors->first('descripcion') }}</p>
        @endif
        <input type="file" class="file-select" accept="image/*" name="imagenes"> <br><br>
        @if ($errors->has('imagenes'))
            <p class="p-2 mb-2 bg-danger text-white rounded">{{ $errors->first('imagenes') }}</p>
        @endif
        <input type="submit" class="btn btn-primary" value="Subir">
    </form>
</div>

@include('footer')

@endsection
