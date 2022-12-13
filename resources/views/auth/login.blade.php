@extends('layouts.app')
@section('content')
<section class="d-flex justify-content-center">
    <div class="class"card col-md-2 p-3"">
        <div class="titulo text-center">
            <h1>Iniciar Sesión</h1>
        </div>
        <div class="login">
            <form method="POST" action="">
                <div style="text-align: center">
                @csrf
                    <input type="email" class="campo focus" placeholder="Email" id="email" name="email">
                    <input type="password" class="campo" placeholder="Contraseña" id="password" name="password">
                    @error('message')
                        <p class="p-2 mb-2 bg-danger text-white rounded">Usuario o Contraseña incorrectos</p>
                    @enderror
                    <button type="suybmit" class="btn btn-primary">Log In</button>
                </div>
            </form>
        </div>
    </div>
</section>
@include('copyright')
@endsection
