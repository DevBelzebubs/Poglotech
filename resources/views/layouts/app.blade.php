<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portable Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tooplate-waso-strategy.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap--popup.css')}}" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-light">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-primary shadow-lg">
    <div class="container">
        <a href="#" class="navbar-brand text-white">Portable <span class="text">Technology</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('index') }}">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#section_2">Nosotros</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#section_3">Servicios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#section_4">Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#section_5">Contactos</a>
                </li>

                @auth
                    <li class="nav-item mx-2">
                        <span class="navbar-text text-white">
                            Hola, <strong>{{ Auth::user()->name }}</strong>
                        </span>
                    </li>

                    @if(Auth::user()->role === 'admin')
                        <li class="nav-item mx-1">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-outline-warning">
                                Panel Admin
                            </a>
                        </li>
                    @endif
                    <li class="nav-item mx-1">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-light">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item mx-1">
                        <a class="nav-link text-white" href="{{ route('login') }}">
                            <strong class="text-warning">Login</strong>
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link text-white" href="{{ route('register') }}">
                            <strong class="text-warning">Registrarse</strong>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
    <main class="mt-5 pt-4">
        @yield('content')
    </main>
    <footer class="site-footer bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="site-footer-wrap d-flex align-items-center">
                        <p class="copyright-text mb-0 me-4">Copyright © 2025 Portable Global Techonology SAC.</p>

                        <ul class="social-icon">
                            <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi-pinterest"></a></li>

                            <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi-youtube"></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="copyright-text mb-0 me-4">Portable Technology utiliza cookies internas y externas para
                        garantizar la mejor experiencia en nuestra web y
                        con fines estadísticos. Si sigues navegando sin modificar la configuración, aceptas nuestra
                        Política de<a href="https://www.tooplate.com/" target="_blank"> cookies.</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    @stack('scripts')
</body>
</html>
