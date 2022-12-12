@extends('layouts.app')
@section('content')
<section class="d-flex justify-content-center">
    <div class="class="card col-md-2 p-3"">
        <div class="mb-3 text-white text-center">
            <h1>Login</h1>
        </div>
        <div class="mb-2">
            <form method="POST" action="">
                @csrf
                <div class="form-group mb-2">
                    <input type="email" class="form-control focus" placeholder="Email" id="email" name="email">
                </div>
                <div class="form-group mb-2">
                    <input type="password" class="form-control focus" placeholder="Password" id="password" name="password">
                </div>
                @error('message')
                    <p class="p-2 mb-2 bg-danger text-white rounded">Usuario o Contraseña incorrectos</p>
                @enderror
                <button type="suybmit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</section>
@endsection
