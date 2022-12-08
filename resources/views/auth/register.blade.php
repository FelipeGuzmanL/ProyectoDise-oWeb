@extends('layouts.app')
@section('content')
<section class="d-flex justify-content-center">
    <div>
        <div class="mb-3 text-white text-center">
            <h1>Register</h1>
        </div>
        <div class="mb-2">
            <form method="POST" action="">
                @csrf
                <div class="form-group mb-2">
                    <input type="name" class="form-control focus" placeholder="Nombre" id="name" name="name">
                </div>
                @error('name')
                    <p class="p-2 mb-2 bg-danger text-white rounded">{{ $message }}</p>
                @enderror
                <div class="form-group mb-2">
                    <input type="email" class="form-control focus" placeholder="Email" id="email" name="email">
                </div>
                @error('email')
                    <p class="p-2 mb-2 bg-danger text-white rounded">{{ $message }}</p>
                @enderror
                <div class="form-group mb-2">
                    <input type="password" class="form-control focus" placeholder="Password" id="password" name="password">
                </div>
                @error('password')
                    <p class="p-2 mb-2 bg-danger text-white rounded">{{ $message }}</p>
                @enderror
                <div class="form-group mb-2">
                    <input type="password" class="form-control focus" placeholder="Password Confirmation" id="password_confirmation" name="password_confirmation">
                </div>
                <button type="suybmit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</section>
@endsection
