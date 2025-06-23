@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="text-center">Panel de Administración</h1>
    <p class="text-center">Bienvenido, {{ Auth::user()->name }}</p>
</div>
@endsection