@extends('layouts.app')
@section('content')
<!--<section class="d-flex justify-content-center">
    <div class="card col-md-5 p-5">
        <div class="mb-3">
            <h4>Envía tu diseño</h4>
        </div>
        <div class="flex position-relative">
            <form action="" method="POST" class="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título Publicación">
                    @if ($errors->has('titulo'))
                        <p class="p-2 mb-2 bg-danger text-white rounded">{{ $errors->first('titulo') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    @if ($errors->has('descripcion'))
                        <p class="p-2 mb-2 bg-danger text-white rounded">{{ $errors->first('descripcion') }}</p>
                    @endif
                </div>
                <div class="boton">
                    <input type="file" class="text-lg" accept="image/*" name="imagenes"> <br><br>
                    @if ($errors->has('imagenes'))
                        <p class="p-2 mb-2 bg-danger text-white rounded">{{ $errors->first('imagenes') }}</p>
                    @endif
                    <input type="submit" class="btn btn-primary" value="Subir">
                </div>

            </form>
         </div>
    </div>
</section>-->

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
        <input type="file" class="text-lg" accept="image/*" name="imagenes"> <br><br>
        @if ($errors->has('imagenes'))
            <p class="p-2 mb-2 bg-danger text-white rounded">{{ $errors->first('imagenes') }}</p>
        @endif
        <input type="submit" class="btn btn-primary" value="Subir">
    </form>
</div>

@include('footer')

@endsection
