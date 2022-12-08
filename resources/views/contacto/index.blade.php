@extends('layouts.app')
@section('content')
    <section class="d-flex justify-content-center">
        <div class="card col-md-2 p-3">
            <div class="mb-3">
                <h4>Contactenos</h4>
            </div>
            <div class="mb-2">
                <form action="">
                    <div class="mb-2">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="mb-2">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
                    </div>
                    <div class="mb-2">
                        <label for="correo">Correo</label>
                        <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo">
                    </div>
                    <div class="mb-2">
                        <label for="mensaje">Mensaje</label>
                        <textarea type="text" class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
