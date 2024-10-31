<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Untree.co">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JavaScript Bundle (incluye Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
        <style>
            .card {
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            }

            .card:hover {
                transform: scale(1.05);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .card-title {
                font-size: 1.5rem;
                color: #252850;
            }

            .card-body {
                background-color: #f8f9fa;
            }

            .btn-primary {
                background-color: #00b4d8;
                border: none;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #0077b6;
            }

        </style>
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
    <h2 class="text-center mb-4">Nuestros Planes para el Sistema de Gestión Hotelera</h2>

    <div class="row justify-content-center">
        @foreach($planes as $plan)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-body text-center p-4" style="background-color: #f8f9fa;">
                        <h5 class="card-title" style="font-weight: bold;">{{ $plan->nombre }}</h5>
                        <p class="card-text mt-3">
                            <strong>Precio Mensual:</strong> S/ {{ number_format($plan->costo, 2) }}
                        </p>
                        <button class="btn btn-primary mt-3 rounded-pill" data-bs-toggle="modal" data-bs-target="#planModal" 
                                data-plan='{
                                    "nombre": "{{ $plan->nombre }}",
                                    "limite_sucursales": "{{ $plan->limite_sucursales == 0 ? 'Ilimitadas' : $plan->limite_sucursales }}",
                                    "limite_habitaciones": "{{ $plan->limite_habitaciones == 0 ? 'Ilimitadas' : $plan->limite_habitaciones }}",
                                    "facturacion_sunat": "{{ $plan->facturacion_sunat ? 'Sí' : 'No' }}",
                                    "gestor_usuarios": "{{ $plan->gestor_usuarios ? 'Sí' : 'No' }}"
                                }' onclick="mostrarDetallesPlan(this)">
                            Ver
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="planModal" tabindex="-1" aria-labelledby="planModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title text-center w-100" id="planModalLabel">Plan</h5>
            <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

            <div class="modal-body">
                <p><strong>Sucursales Permitidas:</strong> <span id="sucursalesPermitidas"></span></p>
                <p><strong>Habitaciones Permitidas:</strong> <span id="habitacionesPermitidas"></span></p>
                <p><strong>Facturación con SUNAT:</strong> <span id="facturacionSunat"></span></p>
                <p><strong>Gestor de Usuarios:</strong> <span id="gestorUsuarios"></span></p>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <a href="https://demo.llamadevs.com/login" class="btn btn-success btn-lg">Probar Sistema Demo</a>
            </div>

        </div>
    </div>
</div>


        <footer class="footer-section" style="background: #1e1e2f; color: #ffffff; padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center text-center text-md-start">
            <!-- Acerca de LlamaDevs -->
            <div class="col-md-4 mb-4 text-center" >
                <h5 style="color: #fff; font-weight: bold;">ACERCA DE LLAMADEVS</h5>
                <br>
                <p style="color: #ccc;">
                    LlamaDevs se dedica a brindar soluciones tecnológicas personalizadas para empresas de todo tipo. Nos esforzamos por ofrecer un servicio de alta calidad que transforme y optimice tu negocio.
                </p>
            </div>

            <!-- Contacto -->
            <div class="col-md-4 mb-4" >
                <h5 style="color: #fff; font-weight: bold;" class="text-center">CONTACTO</h5>
                <br>
                <p style="color: #ccc;" class="text-center">
                    Puedes contactarnos a través de nuestras redes sociales o enviarnos un correo electrónico. Estamos disponibles para ayudarte y resolver tus consultas.
                </p>
                <ul class="list-inline mt-3 text-center">
                    <li class="list-inline-item">
                        <a href="#" style="color: #fff; font-size: 24px;"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" style="color: #fff; font-size: 24px;"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" style="color: #fff; font-size: 24px;"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" style="color: #fff; font-size: 24px;"><i class="fab fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>

            <!-- Más Información -->
            <div class="col-md-4 mb-4">
                <h5 style="color: #fff; font-weight: bold;" class="text-center">MÁS INFORMACIÓN</h5>
                <br>
                <ul class="list-unstyled text-center" style="color: #ccc;">
                    <li><a href="#" style="color: #ccc;">Términos y condiciones</a></li>
                    <li><a href="#" style="color: #ccc;">Política de privacidad</a></li>
                    <li><a href="#" style="color: #ccc;">Centro de ayuda</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="border-top pt-3" style="border-color: #333; color: #ccc;">
            <div class="row text-center">
                <div class="col-md-12">
                    <p>&copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados. Diseñado por <a href="#" style="color: #00b4d8;">LlamaDevs</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    function mostrarDetallesPlan(button) {
        console.log("Función mostrarDetallesPlan llamada."); // Mensaje de depuración

        try {
            const planData = JSON.parse(button.getAttribute('data-plan'));
            console.log("Datos del plan:", planData); // Mostrar datos del plan en la consola

            document.getElementById('planModalLabel').innerText = planData.nombre;
            document.getElementById('sucursalesPermitidas').innerText = planData.limite_sucursales;
            document.getElementById('habitacionesPermitidas').innerText = planData.limite_habitaciones;
            document.getElementById('facturacionSunat').innerText = planData.facturacion_sunat;
            document.getElementById('gestorUsuarios').innerText = planData.gestor_usuarios;

            console.log("Datos asignados al modal correctamente."); // Confirmación de asignación

        } catch (error) {
            console.error("Error al analizar los datos del plan:", error); // Mostrar error en caso de fallo
        }
    }
</script>

    </body>
    

