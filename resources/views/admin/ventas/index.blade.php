@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 mb-5 pb-5">
    <h2 class="mb-4">Ventas Registradas</h2>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">
        Regresar
    </a>
    @foreach($ventas as $venta)
        <div class="card mb-3">
            <div class="card-header">
                Venta #{{ $venta->id }} - Usuario: {{ $venta->usuario->name }} - Total: S/. {{ number_format($venta->total, 2) }}
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($venta->detalles as $detalle)
                        <li class="list-group-item d-flex justify-content-between">
                            <span>{{ $detalle->producto->nombre }} x {{ $detalle->cantidad }}</span>
                            <span>S/. {{ number_format($detalle->precio_unitario, 2) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
@endsection