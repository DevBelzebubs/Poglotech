@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Catálogo de Productos</h2>
    <form method="GET" action="{{ route('catalogo') }}" class="row mb-4 g-2">
        <div class="col-md-4">
            <input type="text" name="nombre" value="{{ request('nombre') }}" class="form-control" placeholder="Buscar por nombre...">
        </div>
        <div class="col-md-2">
            <input type="number" name="precio_min" step="0.01" value="{{ request('precio_min') }}" class="form-control" placeholder="Precio mínimo">
        </div>
        <div class="col-md-2">
            <input type="number" name="precio_max" step="0.01" value="{{ request('precio_max') }}" class="form-control" placeholder="Precio máximo">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Filtrar</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('catalogo') }}" class="btn btn-secondary w-100">Limpiar</a>
        </div>
    </form>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse($productos as $producto)
        <div class="col">
            <div class="card h-100 shadow-sm">
                @if($producto->imagen)
                    <img src="{{ asset('storage/' . $producto->imagen) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $producto->nombre }}">
                @else
                    <img src="https://via.placeholder.com/400x200?text=Sin+imagen" class="card-img-top" alt="Imagen no disponible">
                @endif
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text text-truncate">{{ $producto->descripcion }}</p>
                    <p class="fw-bold text-success">S/ {{ number_format($producto->precio, 2) }}</p>
                    <a href="{{ route('producto', $producto->id) }}" class="btn btn-outline-primary mt-auto">Ver detalle</a>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center text-muted">No se encontraron productos.</p>
        @endforelse
    </div>
</div>
@endsection
