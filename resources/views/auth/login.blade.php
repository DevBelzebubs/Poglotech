@extends('layouts.guest')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Inicio de Sesión</h2>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="border p-4 rounded shadow-sm bg-light">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="remember" id="remember_me" class="form-check-input">
                    <label class="form-check-label" for="remember_me">Recuérdame</label>
                </div>

                <div class="mb-3 text-end">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>

            <div class="text-center mt-4">
                <p>O iniciar sesión con</p>
                <a href="#"><i class="bi bi-google fs-4 mx-2"></i></a>
                <a href="#"><i class="bi bi-facebook fs-4 mx-2"></i></a>
                <a href="#"><i class="bi bi-twitter fs-4 mx-2"></i></a>
            </div>

            <p class="text-center mt-3">¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
        </div>
    </div>
</div>
@endsection
