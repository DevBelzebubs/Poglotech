@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-4">
    <h1 class="text-center mb-4">Panel de Administración</h1>
    <p class="text-center mb-5">Bienvenido, {{ Auth::user()->name }}.</p>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card border-primary shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam display-4 text-primary mb-3"></i>
                    <h5 class="card-title">Productos Registrados</h5>
                    <p class="card-text fs-4">{{ \App\Models\Producto::count() }}</p>
                    <a href="{{ route('admin.productos.index') }}" class="btn btn-outline-primary mt-2">
                        Ver Productos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-success shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-plus-square display-4 text-success mb-3"></i>
                    <h5 class="card-title">Agregar Nuevo Producto</h5>
                    <p class="card-text">Registra productos para que aparezcan en el catálogo.</p>
                    <a href="{{ route('admin.productos.create') }}" class="btn btn-success mt-2">
                        Crear Producto
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-info shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-people display-4 text-info mb-3"></i>
                    <h5 class="card-title">Usuarios Registrados</h5>
                    <p class="card-text fs-4">{{ \App\Models\User::count() }}</p>
                    <a href="{{route('admin.usuarios.index')}}" class="btn btn-outline-info mt-2">
                        Ver Usuarios
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-warning shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-bar-chart-line display-4 text-warning mb-3"></i>
                    <h5 class="card-title">Ventas Totales</h5>
                    <p class="card-text fs-4">S/. {{ number_format($ventasTotales, 2) }}</p>
                    <a href="{{ route('admin.ventas.index') }}" class="btn btn-outline-warning mt-2">
                        Ver Detalles
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection