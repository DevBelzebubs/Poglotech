@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 mb-5 pb-5">
    <h2 class="mb-4">Usuarios Registrados</h2>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger mb-5">
        Regresar
    </a>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Registrado en</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->role }}</td>
                    <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
