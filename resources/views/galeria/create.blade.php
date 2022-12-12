@extends('layouts.app')
@section('content')
<section class="d-flex justify-content-center">
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
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <input type="file" class="text-lg" accept="image/*" name="imagenes"> <br><br>
                    <input type="submit" class="btn btn-primary" value="Subir">
                </div>
                
            </form>
         </div>
    </div>
</section>
    
@endsection