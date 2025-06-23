@extends('layouts.app')

@section('content')
<section class="d-flex justify-content-center align-items-center text-white text-center">
    <div>
        <img src="{{ asset('assets/img/contactanos.jpg') }}" alt="fondo" class="img-full">
        <h2 class="display-4">Contáctanos</h2>
    </div>
</section>
<br>
<section>
    <div class="container">
        <h3 class="mb-4">Formulario de Contacto</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>
@endsection