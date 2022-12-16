@extends('layouts.app')
@section('content')

    <div class="container-form">
        <div class="info-form">
            <h2>Contactenos</h2>
            <p>Cualquier duda o consulta, puede escribirnos a nuestro correo electronico, llamar al número telefonocio o enviar un Whatsapp.
            </p>
            <a href="https://goo.gl/maps/CgJsFnYMsYMEcHK66" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-location-dot"></i> Donde estamos ubicados</a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.207582222575!2d-73.16729410947752!3d-40.55604309295593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96163723e64bd067%3A0x4e11d3555a4a70f3!2sRustic_mg!5e0!3m2!1ses-419!2scl!4v1670900073767!5m2!1ses-419!2scl" width="360" height="125" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a href="#"><i class="fa-solid fa-phone"></i> +569 53666357</a>
            <a href="#"><i class="fa-solid fa-envelope"></i> contacto@rusticmg.cl</a>
        </div>
        <form action="{{ route('contacto.store') }}" autocomplete="off" method="POST">
            @csrf
            <div style="text-align: center">
                <input type="text" class="campo" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre')}}">
                @error('nombre')
                    <p class="p-2 mb-2 bg-danger text-white rounded">Nombre es requerido</p>
                @enderror
                <input type="text" class="campo" name="correo" id="correo" placeholder="Correo" value="{{ old('correo')}}">
                @error('correo')
                    <p class="p-2 mb-2 bg-danger text-white rounded">Email incorrecto</p>
                @enderror
                <textarea type="text" class="texarea" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                @error('mensaje')
                    <p class="p-2 mb-2 bg-danger text-white rounded">Escriba el mensaje</p>
                @enderror
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>


        @if (session('info'))
            <script>
                alert("{{session('info')}}");
            </script>
        @endif
    </div>


    <!--<section class="d-flex justify-content-center">
        <div class="contacto">
            <div class="ubicacion">
                <a href=""><i class="fa-solid fa-location-dot"></i></a>
                <h2 class="sub-titulo">Donde Estamos</h2>
                <p>Osorno</p>
            </div>
            <div class="llamanos">
                <a href=""><i class="fa-solid fa-phone"></i></a>
                <h2 class="sub-titulo">Llámanos</h2>
                <p>+569 53666357</p>
            </div>
            <div class="correo">
                <a href=""><i class="fa-solid fa-envelope"></i></a>
                <h2 class="sub-titulo">Correo</h2>
                <p>contacto@rusticmg.cl</p>
            </div>
        </div>
        <div class="card p-3">
            <div class="mb-3">
                <h4>Contactenos</h4>
            </div>
            <div class="mb-2">
                <form action="">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo">
                    </div>
                    <div class="mb-2">
                        <textarea type="text" class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="boton">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>-->

    @include('footer')
@endsection
