<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Untree.co">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

        <!-- Título relevante para el sitio -->
        <title>Soluciones TI Personalizadas | LlamaDevs</title>

        <!-- Descripción clara del propósito del sitio -->
        <meta name="description" content="LlamaDevs ofrece soluciones tecnológicas personalizadas para impulsar y optimizar tu negocio. Contamos con sistemas para hoteles, minimarkets y más.">
        <meta name="keywords" content="soluciones tecnológicas, sistemas para hoteles, sistemas para minimarkets, LlamaDevs, TI, software personalizado, automatización de procesos">

        <!-- Open Graph para compartir en redes sociales -->
        <meta property="og:title" content="Soluciones TI Personalizadas | LlamaDevs">
        <meta property="og:description" content="En LlamaDevs, te ayudamos a transformar tus ideas en soluciones tecnológicas que optimizan y mejoran la eficiencia de tu negocio.">
        <meta property="og:image" content="{{ asset('images/llamadevs2_logo.png') }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://llamadevs.com">

        <!-- Twitter Card para compartir en Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Soluciones TI Personalizadas | LlamaDevs">
        <meta name="twitter:description" content="LlamaDevs ofrece soluciones tecnológicas personalizadas para impulsar y optimizar tu negocio.">
        <meta name="twitter:image" content="{{ asset('images/llamadevs2_logo.png') }}">

        <!-- Vinculación de la hoja de estilos y scripts -->
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

        <!-- CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Incluye la hoja de estilo de Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>


    <body>

        <!-- Start Header/Navigation -->
        <nav class="custom-navbar navbar navbar-expand-md navbar-dark py-3" style="background-color: #252850 !important;" aria-label="Furni navigation bar">
            <div class="container">
                <img src="images/llamadevs2_logo.png" alt="Logo" style="width: 150px; height: 150px; margin-right: 2px;">
                <a class="navbar-brand text-white" href="" >LlamaDevs<span>.</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                    aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li>
                            <a class="nav-link text-white hover:text-gray-300" href="/" style="font-size: 16px;">Principal</a>
                        </li>
                        <li><a class="nav-link text-white hover:text-gray-300" href="/" style="font-size: 16px;">Sistemas</a></li>
                        <li><a class="nav-link text-white hover:text-gray-300" href="/" style="font-size: 16px;">Acerca de Nosotros</a></li>
                        <li class="nav-item active"><a class="nav-link text-white hover:text-gray-300" href="{{ route('planes.index') }}" style="font-size: 16px;">Planes</a></li>
                        <li><a class="nav-link text-white hover:text-gray-300" href="/" style="font-size: 16px;">Contáctanos</a></li>
                        <li>
                            <a href="https://demo.llamadevs.com/login">
                            <button class="btn px-4 py-2 rounded-pill" style="background-color: #00e0ff; border-radius: 20px; padding: 10px 20px; transition: transform 0.3s; color: #1a1a2e; font-weight: bold; font-size: 16px;"
                                    onmouseover="this.style.transform='scale(1.1)'; this.style.backgroundColor='#00b2cc';"
                                    onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#00e0ff';">Prueba gratis</button>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <div class="container mt-5">
            <h2 class="text-center mb-4">Nuestros Planes</h2>

            <div class="row justify-content-center">
                @foreach($planes as $plan)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $plan->nombre }}</h5>
                                <p class="card-text">
                                    <strong>Precio Mensual:</strong> S/ {{ number_format($plan->costo, 2) }}<br>
                                    <strong>Sucursales Permitidas:</strong> {{ $plan->limite_sucursales == 0 ? 'Ilimitadas' : $plan->limite_sucursales }}<br>
                                    <strong>Habitaciones Permitidas:</strong> {{ $plan->limite_habitaciones == 0 ? 'Ilimitadas' : $plan->limite_habitaciones }}<br>
                                    <strong>Facturación con SUNAT:</strong> {{ $plan->facturacion_sunat ? 'Sí' : 'No' }}<br>
                                    <strong>Gestor de Usuarios:</strong> {{ $plan->gestor_usuarios ? 'Sí' : 'No' }}<br>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>

