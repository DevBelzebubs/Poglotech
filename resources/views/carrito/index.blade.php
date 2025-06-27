@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h2 class="mb-4">Tu Carrito</h2>

    @forelse($carrito as $id => $item)
        <div class="card mb-3 shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5>{{ $item['nombre'] }}</h5>
                    <p>Cantidad: {{ $item['cantidad'] }}</p>
                    <p>Precio unitario: S/ {{ number_format($item['precio'], 2) }}</p>
                </div>
                <form method="POST" action="{{ route('carrito.eliminar', $id) }}">
                    @csrf
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    @empty
        <p class="text-muted">No tienes productos en el carrito.</p>
    @endforelse

    @if(count($carrito) > 0)
        <form method="POST" action="{{ route('comprar') }}">
            @csrf
            <button type="submit" class="btn btn-success">Realizar Compra</button>
        </form>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection
