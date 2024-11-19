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
            /* Estilos generales */
            body {
                background-color: #f8f9ff;
            }

            /* Estilos para la sección de planes */
            .planes-section {
                padding: 80px 0;
                background: linear-gradient(135deg, #f8f9ff 0%, #e9ecef 100%);
            }

            .section-title {
                color: #252850;
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 3rem;
                text-align: center;
                position: relative;
            }

            .section-title:after {
                content: '';
                position: absolute;
                bottom: -15px;
                left: 50%;
                transform: translateX(-50%);
                width: 80px;
                height: 4px;
                background: #00b4d8;
                border-radius: 2px;
            }

            /* Estilos mejorados para las cards */
            .plan-card {
                border: none;
                border-radius: 20px;
                overflow: hidden;
                transition: all 0.3s ease;
                background: white;
                height: 100%;
            }

            .plan-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            }

            .plan-header {
                background: #252850;
                color: white;
                padding: 20px;
                text-align: center;
                border-radius: 20px 20px 0 0;
            }

            .plan-title {
                font-size: 1.8rem;
                font-weight: 700;
                margin: 0;
                color: white;
            }

            .plan-price {
                font-size: 2.5rem;
                font-weight: 700;
                color: #00b4d8;
                margin: 20px 0;
            }

            .plan-price span {
                font-size: 1rem;
                color: #6c757d;
            }

            .plan-features {
                padding: 30px;
                list-style: none;
            }

            .plan-features li {
                padding: 10px 0;
                border-bottom: 1px solid #eee;
                color: #6c757d;
            }

            .plan-features li i {
                color: #00b4d8;
                margin-right: 10px;
            }

            /* Estilos para el botón */
            .btn-plan {
                background: #00b4d8;
                color: white;
                border: none;
                padding: 12px 30px;
                border-radius: 50px;
                font-weight: 600;
                transition: all 0.3s ease;
                width: 80%;
                margin: 20px auto;
                display: block;
            }

            .btn-plan:hover {
                background: #0077b6;
                transform: scale(1.05);
            }

            /* Estilos para el modal */
            .modal-content {
                border-radius: 20px;
                border: none;
            }

            .modal-header {
                background: #252850;
                color: white;
                border-radius: 20px 20px 0 0;
                padding: 20px;
            }

            .modal-title {
                font-weight: 700;
                color: white;
            }

            .modal-body {
                padding: 30px;
            }

            .modal-body p {
                margin-bottom: 15px;
                color: #6c757d;
            }

            .modal-body strong {
                color: #252850;
            }

            .btn-demo {
                background: #00b4d8;
                color: white;
                padding: 12px 30px;
                border-radius: 50px;
                font-weight: 600;
                transition: all 0.3s ease;
            }

            .btn-demo:hover {
                background: #0077b6;
                transform: scale(1.05);
            }

            /* Responsive */
            @media (max-width: 768px) {
                .section-title {
                    font-size: 2rem;
                }

                .plan-card {
                    margin-bottom: 30px;
                }

                .plan-price {
                    font-size: 2rem;
                }
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
        <div class="planes-section">
            <div class="container">
                <h2 class="section-title">Planes de Gestión Hotelera</h2>

                <div class="row justify-content-center">
                    @foreach($planes as $plan)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="plan-card">
                                <div class="plan-header">
                                    <h3 class="plan-title">{{ $plan->nombre }}</h3>
                                    <div class="plan-price">
                                        S/ {{ number_format($plan->costo, 2) }}
                                        <span>/mes</span>
                                    </div>
                                </div>
                                <ul class="plan-features">
                                    <li>
                                        <i class="fas fa-building"></i>
                                        {{ $plan->limite_sucursales == 0 ? 'Sucursales ilimitadas' : $plan->limite_sucursales . ' sucursales' }}
                                    </li>
                                    <li>
                                        <i class="fas fa-bed"></i>
                                        {{ $plan->limite_habitaciones == 0 ? 'Habitaciones ilimitadas' : $plan->limite_habitaciones . ' habitaciones' }}
                                    </li>
                                    <li>
                                        <i class="fas fa-file-invoice"></i>
                                        {{ $plan->facturacion_sunat ? 'Facturación SUNAT incluida' : 'Sin facturación SUNAT' }}
                                    </li>
                                    <li>
                                        <i class="fas fa-users"></i>
                                        {{ $plan->gestor_usuarios ? 'Gestor de usuarios incluido' : 'Sin gestor de usuarios' }}
                                    </li>
                                </ul>
                                <button class="btn-plan" data-bs-toggle="modal" data-bs-target="#planModal"
                                        data-plan='{
                                            "nombre": "{{ $plan->nombre }}",
                                            "limite_sucursales": "{{ $plan->limite_sucursales == 0 ? 'Ilimitadas' : $plan->limite_sucursales }}",
                                            "limite_habitaciones": "{{ $plan->limite_habitaciones == 0 ? 'Ilimitadas' : $plan->limite_habitaciones }}",
                                            "facturacion_sunat": "{{ $plan->facturacion_sunat ? 'Sí' : 'No' }}",
                                            "gestor_usuarios": "{{ $plan->gestor_usuarios ? 'Sí' : 'No' }}"
                                        }' onclick="mostrarDetallesPlan(this)">
                                    Ver detalles
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Modal mejorado -->
        <div class="modal fade" id="planModal" tabindex="-1" aria-labelledby="planModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="planModalLabel">Detalles del Plan</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p><i class="fas fa-building me-2"></i> <strong>Sucursales Permitidas:</strong> <span id="sucursalesPermitidas"></span></p>
                        <p><i class="fas fa-bed me-2"></i> <strong>Habitaciones Permitidas:</strong> <span id="habitacionesPermitidas"></span></p>
                        <p><i class="fas fa-file-invoice me-2"></i> <strong>Facturación con SUNAT:</strong> <span id="facturacionSunat"></span></p>
                        <p><i class="fas fa-users me-2"></i> <strong>Gestor de Usuarios:</strong> <span id="gestorUsuarios"></span></p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <a href="https://demo.llamadevs.com/login" class="btn btn-demo">
                            <i class="fas fa-play-circle me-2"></i>Probar Sistema Demo
                        </a>
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


