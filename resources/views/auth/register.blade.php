@extends('layouts.app')
@section('content')
<section class="d-flex justify-content-center">
    <div>
        <div class="titulo text-center">
            <h1>Registrarse</h1>
        </div>
        <div class="register">
            <form method="POST" action="">
                <div style="text-align: center">
                    @csrf
                    <input type="name" class="campo focus" placeholder="Nombre" id="name" name="name" value="{{ old('name')}}">
                    @error('name')
                        <p class="campo bg-danger text-white">{{ $message }}</p>
                    @enderror
                    <input type="email" class="campo" placeholder="Email" id="email" name="email" value="{{ old('email')}}">
                    @error('email')
                        <p class="campo bg-danger text-white">{{ $message }}</p>
                    @enderror
                    <input type="password" class="campo" placeholder="Contraseña" id="password" name="password">
                    @error('password')
                        <p class="campo bg-danger text-white">{{ $message }}</p>
                    @enderror
                    <input type="password" class="campo" placeholder="Confirme Contraseña" id="password_confirmation" name="password_confirmation">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>
@include('copyright')
@endsection
