@extends('layouts.app')

@section('content')
<div class="container mb-5 pb-5">
    <h2>Crear Producto</h2>
    <form action="{{ route('admin.productos.store') }}" method="POST" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3" placeholder="Descripción opcional..."></textarea>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio (S/.)</label>
            <input type="number" name="precio" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Producto</button>
        <a href="{{ route('admin.productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
