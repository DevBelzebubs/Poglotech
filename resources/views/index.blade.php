@extends('layouts.app')

@section('content')
<div class="container-fluid px-0" style="margin-top:-75px">
    <header class="position-relative mb-4 p-4 rounded text-white overflow-hidden" style="height: 550px;">
        <img src="{{ asset('img/componentes-electronicos.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; filter:brightness(0.3); z-index: 0">
        <div class="d-block position-relative mt-5" style="z-index: 1">
            <div style="text-align:center;">
                <h2 class="fw-bold mb-2" style="font-size:56px; color:white">¿Problemas con su portátil?</h2>
                <h3 class="fw-bold mb-2" style="margin-left:-22vw; color:white">¡Soluciónelo ahora!</h3>
            </div>
            <h3 class="fw-normal ml-5 mt-5" style="font-size:18px; text-align:center; color:white">
                Venta y repuestos de laptops al por mayor y al por menor, todo a un click de distancia
            </h3>
            <div class="text-center mt-5">
                <a href="{{ url('/productos') }}" class="btn btn-primary">Ir al catálogo</a>
            </div>
        </div>
    </header>
    <section class="about section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="about-image-wrap h-100">
                        <img src="{{ asset('img/peter-jones-WZROBIlY8Rg-unsplash.jpg') }}" class="img-fluid about-image" alt="">
                         <div class="about-image-info">
                            <h4 class="text-white">Portable Global Technology</h4>
                            <p class="text-white mb-0"> Enucentranos en Lima</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-flex flex-column">
                     <div class="about-thumb bg-white shadow-lg">
                        <div class="about-info">
                            <h2 class="mb-3">Acerca de Nosotros</h2>
                            <h5 class="mb-3">Venta y repuestos de laptops al por mayor y al por menor</h5>
                            <p>Somos una empresa especializada en la comercialización de
                                    laptops y repuestos de alta calidad, tanto al por mayor como al por menor.</p>
                            <p>Nuestro compromiso es brindar soluciones tecnológicas accesibles y confiables para
                                    particulares, negocios y
                                    centros educativos.</p>
                        </div>
                    </div>
                    <div class="row h-100">
                         <div class="col-lg-6 col-6">
                            <div class="about-thumb d-flex flex-column justify-content-center bg-danger mb-lg-0 h-100">
                                <div class="about-info">
                                    <h5 class="text-white mb-4">Te estamos esperando</h5>
                                    <a class="custom-btn btn custom-bg-primary" href="#section_5">Contactar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="about-thumb d-flex flex-column justify-content-center bg-warning mb-lg-0 h-100">
                                <div class="about-info">
                                    <h5 class="text-white mb-4">Aprobado por</h5>
                                    <p class="text-white mb-0">Indecopi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="services section-padding" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                        <h2>¿Cómo podemos ayudarte?</h2>
                    </div>
                    <div class="col-lg-6 col-12">
                        <nav>
                            <div class="nav nav-tabs flex-column align-items-baseline" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-business-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business"
                                    aria-selected="true">
                                    <h3>Experiencia y Asesoría Personalizada</h3>
                                </button>
                                <button class="nav-link" id="nav-strategy-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-strategy" type="button" role="tab" aria-controls="nav-strategy"
                                    aria-selected="false">
                                    <h3>Calidad, Garantía y Atención al Cliente</h3>
                                </button>
                                <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video"
                                    aria-selected="false">
                                    <h3>Compromiso con la Tecnología Accesible</h3>
                                </button>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-business" role="tabpanel"
                                aria-labelledby="nav-intro-tab">
                                <img src="{{ asset('img/img3.png') }}"
                                    class="img-fluid" alt="">
                                <h5 class="mt-4 mb-2"></h5>
                                <p>Contamos con un equipo de profesionales con más de 10 años de experiencia en el rubro
                                    tecnológico, lo que
                                    nos permite ofrecer asesoría personalizada y productos que se ajustan a las
                                    necesidades actuales del
                                    mercado.</p>
                            </div>
                            <div class="tab-pane fade show" id="nav-strategy" role="tabpanel"
                                aria-labelledby="nav-strategy-tab">
                                <img src="{{ asset('img/img2.png') }}"
                                    class="img-fluid" alt="">

                                <h5 class="mt-4 mb-2"></h5>
                                <div class="row">
                                    <p>Nos destacamos por nuestro servicio postventa, garantía en todos nuestros
                                        productos y una atención al
                                        cliente rápida y eficiente. Trabajamos con marcas reconocidas y ofrecemos
                                        opciones económicas y de alto
                                        rendimiento para todo tipo de usuarios.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-video" role="tabpanel"
                                aria-labelledby="nav-video-tab">
                                <img src="{{ asset('img/img1.png') }}"
                                    class="img-fluid" alt="">

                                <h5 class="mt-4 mb-2"></h5>

                                <p>En Portable Global Technology, creemos que la tecnología debe estar al alcance de
                                    todos, y por eso nos
                                    esforzamos día a día en mejorar nuestros procesos, ampliar nuestro catálogo y
                                    mantener precios competitivos.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="projects section-padding pb-0" id="section_4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                        <h2>Productos</h2>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="projects-thumb projects-thumb-small">
                            <a href="{{ route('catalogo')}}">
                                <img src="{{ asset('img/bateria.png') }}" class="img-fluid projects-image" alt="">
                                <div class="projects-info">
                                    <div class="projects-title-wrap">
                                        <h2 class="projects-title">Bateria Interna</h2>
                                    </div>
                                    <div class="projects-btn-wrap mt-4">
                                        <span class="custom-btn btn">
                                            <i class="bi-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="projects-thumb projects-thumb-small">
                            <a href="{{ route('catalogo')}}">
                                <img src="{{ asset('img/ram.png') }}" class="img-fluid projects-image" alt="">
                                <div class="projects-info">
                                    <div class="projects-title-wrap">
                                        <h2 class="projects-title">Memoria Ram</h2>
                                    </div>
                                    <div class="projects-btn-wrap mt-4">
                                        <span class="custom-btn btn" href="project-detail.html">
                                            <i class="bi-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="projects-thumb projects-thumb-small">
                            <a href="{{ route('catalogo')}}">
                                <img src="{{ asset('img/ventilador.png') }}" class="img-fluid projects-image" alt="">
                                <div class="projects-info">
                                    <div class="projects-title-wrap">
                                        <h2 class="projects-title">Ventilador</h2>
                                    </div>
                                    <div class="projects-btn-wrap mt-4">
                                        <span class="custom-btn btn" href="project-detail.html">
                                            <i class="bi-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="projects-thumb projects-thumb-large">
                            <a href="{{ route('catalogo')}}">
                                <img src="{{ asset('img/cargador.png') }}" class="img-fluid projects-image" alt="">
                                <div class="projects-info">
                                    <div class="projects-title-wrap">
                                        <h2 class="projects-title">Cargador</h2>
                                    </div>

                                    <div class="projects-btn-wrap mt-4">
                                        <span class="custom-btn btn" href="project-detail.html">
                                            <i class="bi-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="projects-thumb projects-thumb-small">
                            <a href="{{route('catalogo')}}">
                                <img src="{{ asset('img/procesador.png') }}" class="img-fluid projects-image" alt="">
                                <div class="projects-info">
                                    <div class="projects-title-wrap">
                                        <h2 class="projects-title">Procesador</h2>
                                    </div>
                                    <div class="projects-btn-wrap mt-4">
                                        <span class="custom-btn btn" href="project-detail.html">
                                            <i class="bi-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="contact" id="section_5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#b82121" fill-opacity="1"
                    d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
            <div class="contact-container-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form" action="" method="post" role="form">
                                <h2 class="mb-5">Contáctanos</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Nombre" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email" required="">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="7" id="message" name="message"
                                            placeholder="Mensaje"></textarea>

                                        <button type="submit" class="form-control">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="contact-thumb">
                                <div class="contact-info bg-white shadow-lg">
                                    <h4 class="mb-4">"Ubicación de Portable Global Technology"</h4>
                                    <h4 class="mb-2">
                                        <a href="tel: 240-480-9600">
                                            <i class="bi-telephone contact-icon me-2"></i>
                                            +51 952 014 938
                                        </a>
                                    </h4>
                                    <h5>
                                        <a href="mailto:info@company.com" class="footer-link">
                                            <i class="bi-envelope-fill contact-icon me-2"></i>
                                            info@company.com
                                        </a>
                                    </h5>
                                    <iframe class="google-map mt-4"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4063.103580426464!2d-83.0264337484065!3d42.33402597908653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2cce05ddf4f1%3A0xcc0559eb3fda00c9!2sDetroit%20Riverwalk%2C%20Detroit%2C%20MI!5e1!3m2!1sen!2sus!4v1657814406289!5m2!1sen!2sus"
                                        width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
</div>
@endsection