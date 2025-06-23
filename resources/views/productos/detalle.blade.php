@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 mb-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="row g-0">
                    <div class="col-md-6">
                        @if($producto->imagen)
                            <img src="{{ asset('storage/' . $producto->imagen) }}" class="img-fluid rounded-start" alt="{{ $producto->nombre }}">
                        @else
                            <img src="https://via.placeholder.com/500x400?text=Sin+imagen" class="img-fluid rounded-start" alt="Imagen por defecto">
                        @endif
                    </div>  
                    <div class="col-md-6 d-flex flex-column justify-content-between p-4">
                        <div>
                            <h3 class="card-title">{{ $producto->nombre }}</h3>
                            <p class="text-muted">{{ $producto->descripcion }}</p>
                            <p class="fw-bold h4 text-success">S/ {{ number_format($producto->precio, 2) }}</p>
                            <p class="text-secondary">Stock: {{ $producto->stock }}</p>
                        </div>
                        <ul class="list-unstyled mb-3">
                                <li><strong>Precio:</strong> <span class="text-success h5">S/ {{ number_format($producto->precio, 2) }}</span></li>
                                <li><strong>Stock disponible:</strong> {{ $producto->stock }}</li>
                                <li><strong>Envío:</strong> Gratis a todo el país</li>
                            </ul>
                        <div class="mt-4">
                            <a href="#" class="btn btn-lg btn-success w-100 mb-2">Comprar ahora</a>
                            <a href="{{ route('catalogo') }}" class="btn btn-outline-secondary w-100">← Volver al catálogo</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
