    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Untree.co">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap4" />
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

        <!-- CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <title>LlamaDevs</title>
  <!-- Incluye la hoja de estilo de Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>

    <body>

        <!-- Start Header/Navigation -->
        <nav class="custom-navbar navbar navbar-expand-md navbar-dark py-3" style="background-color: #252850 !important;" aria-label="Furni navigation bar">
            <div class="container">
                <img src="images/llamadevs2_logo.png" alt="Logo" style="width: 150px; height: 150px; margin-right: 2px;">
                <a class="navbar-brand text-white" href="index.html" >LlamaDevs<span>.</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                    aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item active">
                            <a class="nav-link text-white hover:text-gray-300" href="index.html" style="font-size: 16px;">Principal</a>
                        </li>
                        <li><a class="nav-link text-white hover:text-gray-300" href="shop.html" style="font-size: 16px;">Sistemas</a></li>
                        <li><a class="nav-link text-white hover:text-gray-300" href="about.html" style="font-size: 16px;">Acerca de Nosotros</a></li>
                        <li><a class="nav-link text-white hover:text-gray-300" href="services.html" style="font-size: 16px;">Servicios</a></li>
                        <li><a class="nav-link text-white hover:text-gray-300" href="contact.html" style="font-size: 16px;">Contáctanos</a></li>
                        <li>
                            <button class="btn px-4 py-2 rounded-pill" style="background-color: #00e0ff; border-radius: 20px; padding: 10px 20px; transition: transform 0.3s; color: #1a1a2e; font-weight: bold; font-size: 16px;"
                                    onmouseover="this.style.transform='scale(1.1)'; this.style.backgroundColor='#00b2cc';"
                                    onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#00e0ff';">Prueba gratis</button>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>


        <!-- End Header/Navigation -->

        <!-- Start Hero Section -->
        <div class="hero" data-aos="fade-up" data-aos-duration="1500" style="background-color: #95dfe5;">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Texto del Hero -->
                    <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">
                        <div class="intro-excerpt">
                            <h1 style="color: #252850;">Te ayudamos a impulsar tu negocio con Soluciones TI</h1>
                            <p class="text-justify mb-4" style="color: #252850;">
                                En LlamaDevs, transformamos tus ideas en soluciones tecnológicas que
                                automatizan procesos, optimizan recursos y mejoran la eficiencia de tu negocio. Nos especializamos en implementar
                                sistemas personalizados y modulares para satisfacer las necesidades específicas de cada empresa.
                            </p>
                            <p>
                                <a href="#" class="btn btn-secondary me-2">Saber más</a>
                                <a href="#" class="btn" style="background-color: #252850; color: white; padding: 10px 30px; text-decoration: none; border-radius: 50px; border: none; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#333764'" onmouseout="this.style.backgroundColor='#252850'">Contáctanos</a>
                            </p>
                        </div>
                    </div>
                    <br>
                    <!-- Imagen del Hero -->
                    <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1200" style="padding-top: 100px">
                        <div class="hero-img-wrap">
                            <img src="images/imgprincipal3.png" class="img-fluid responsive-img" style="width: 100%; max-width: 1000px; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- End Hero Section -->

        <!-- Inicializar AOS -->
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1500, // Duración de la animación en milisegundos
                easing: 'ease-out-cubic', // Efecto de animación más suave
                once: true // Animar solo una vez al entrar en la vista
            });
        </script>


        <!-- Start Product Carousel Section -->
    <div id="productCarousel" class="carousel slide product-section" data-bs-ride="carousel"
        style="position: relative; overflow: hidden; background: linear-gradient(135deg, #1a1a2e, #16213e);">
        <div class="container">
            <h2 class="mb-4 section-title text-center" style="color: #e0e0e0; font-weight: bold;">Soluciones TI para tu Negocio</h2>
<br>
            <!-- Indicadores del carrusel -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" 
                    aria-current="true" aria-label="Slide 1"
                    style="background-color: #00e0ff; width: 12px; height: 12px; border-radius: 50%; border: none;"></button>
                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"  aria-label="Slide 2"
                    style="background-color: #00e0ff; width: 12px; height: 12px; border-radius: 50%; border: none;"></button>
                
            </div>

            <div class="carousel-inner">

                <!-- Carousel Item 1 - Sistema para Minimarket -->
                <div class="carousel-item" style="transition: transform 1s ease-in-out, opacity 1s ease-in-out;">
                    <div class="row" style="height: 100%;">
                        <!-- Columna de texto -->
                        <div class="col-md-6 col-12 justify-content-center align-items-center text-center" >
                        <h3 class="mb-3" style="color: #00e0ff; font-style: inherit;">Sistema para Minimarket</h3>
                                <p style="color: #b3b3b3;">
                                    Optimiza la gestión de tu minimarket con nuestro sistema especializado. Controla
                                        inventarios, realiza ventas y administra tus productos de manera eficiente.
                                        Automatiza procesos para ahorrar tiempo y maximizar ganancias. Nuestro sistema incluye
                                        módulos de gestión de inventario, ventas, reportes y facturación.
                            </p>
                        </div>
                        <!-- Columna de imagen -->
                        <div class="col-md-6 col-12">
                            <img src="{{ asset('images/minimarket.jpg') }}" alt="Hotel" class="img-fluid">
                        </div>
                        <div class="justify-content-center align-items-center text-center">
                        <p><a href="minimarket.html" class="btn btn-primary mt-3" style="background-color: #00e0ff; border-radius: 20px; padding: 10px 20px; transition: transform 0.3s; color: #1a1a2e; font-weight: bold;"
                            onmouseover="this.style.transform='scale(1.1)'; this.style.backgroundColor='#00b2cc';"
                            onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#00e0ff';">Ver Detalles</a></p>
                        </div>
                        
                    </div>

                    
                </div>

                <!-- Carousel Item 2 - Sistema para Hoteles -->
                <div class="carousel-item active" style="transition: transform 1s ease-in-out, opacity 1s ease-in-out;">
                    <div class="row" style="height: 100%;">
                        <!-- Columna de texto -->
                        <div class="col-md-6 col-12 justify-content-center align-items-center text-center" >
                        <h3 class="mb-3" style="color: #00e0ff; font-style: inherit;">Sistema para Hoteles</h3>
                                <p style="color: #b3b3b3;">
                                    Mejora la experiencia de tus huéspedes con un sistema integral para hoteles. Gestiona
                                    reservas, check-ins, check-outs y servicios adicionales desde una plataforma fácil de
                                    usar. Nuestro sistema para hoteles incluye módulos para la gestión de reservas,
                                    servicios de habitaciones, facturación, y estadísticas detalladas sobre ocupación y
                                    rendimiento.
                            </p>
                        </div>
                        <!-- Columna de imagen -->
                        <div class="col-md-6 col-12">
                            <img src="{{ asset('images/hotel.jpg') }}" alt="Hotel" class="img-fluid">
                        </div>
                        <div class="justify-content-center align-items-center text-center">
                        <p><a href="hotel.html" class="btn btn-primary mt-3" style="background-color: #00e0ff; border-radius: 20px; padding: 10px 20px; transition: transform 0.3s; color: #1a1a2e; font-weight: bold;"
                            onmouseover="this.style.transform='scale(1.1)'; this.style.backgroundColor='#00b2cc';"
                            onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#00e0ff';">Ver Detalles</a></p>
                        </div>
                        
                    </div>
                </div>

                

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- End Product Carousel Section -->








        <!-- Agregar la librería AOS en el <head> de tu HTML -->
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

       <!-- Start Why Choose Us Section -->
<div class="why-choose-section" style="background: #f0f8ff; padding: 60px 0 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
                <h2 class="section-title text-center" style="color: #0056b3; font-weight: bold;">¿Por qué elegirnos?</h2>
                <p style="color: #333;" class="text-center">Nos especializamos en ofrecer soluciones TI adaptadas a las necesidades específicas de cada cliente, ayudando a optimizar sus procesos y maximizar la eficiencia de sus negocios.</p>

                <div class="row justify-content-center my-5 d-flex flex-wrap">
                    <!-- Card 1 (Azul) -->
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature feature-card" style="background: linear-gradient(135deg, #252850, #2b3a67); border-radius: 50px 50px 0 0; padding: 20px; transition: transform 0.3s, box-shadow 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
                            <div class="icon d-flex justify-content-center mb-3">
                                <img src="images/customization.png" alt="Customization" class="img-fluid" style="max-width: 80px; border-radius: 50%;">
                            </div>
                            <h3 class="feature-title text-center" style="color: #fff; font-weight: bold;">Sistemas Personalizados</h3>
                            <p class="text-center" style="color: #fff;">Nos adaptamos a las necesidades únicas de cada cliente, desarrollando soluciones a medida que se ajustan perfectamente a sus procesos y objetivos empresariales.</p>
                        </div>
                    </div>

                    <!-- Card 2 (Turquesa) -->
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature feature-card" style="background: linear-gradient(135deg, #00e0ff, #00b3cc); border-radius: 50px 50px 0 0; padding: 20px; transition: transform 0.3s, box-shadow 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
                            <div class="icon d-flex justify-content-center mb-3">
                                <img src="images/flexibility.png" alt="Flexibility" class="img-fluid" style="max-width: 80px; border-radius: 50%;">
                            </div>
                            <h3 class="feature-title text-center" style="color: #fff; font-weight: bold;">Flexibilidad en la Implementación</h3>
                            <p class="text-center" style="color: #fff;">Implementamos módulos de sistemas según las necesidades del cliente, permitiendo una integración progresiva y sin complicaciones.</p>
                        </div>
                    </div>

                    <!-- Card 3 (Blanco) -->
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature feature-card" style="background: linear-gradient(135deg, #ffffff, #f7f7f7); border-radius: 50px 50px 0 0; padding: 20px; transition: transform 0.3s, box-shadow 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
                            <div class="icon d-flex justify-content-center mb-3">
                                <img src="images/support.svg" alt="Support" class="img-fluid" style="max-width: 80px; border-radius: 50%;">
                            </div>
                            <h3 class="feature-title text-center" style="color: #252850; font-weight: bold;">Soporte 24/7</h3>
                            <p class="text-center" style="color: #252850;">Nuestro equipo de soporte está disponible todo el tiempo para resolver cualquier inconveniente y asegurar que tu sistema funcione sin interrupciones.</p>
                        </div>
                    </div>

                    <!-- Card 4 (Gris) -->
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="feature feature-card" style="background: linear-gradient(135deg, #d3d3d3, #bcbcbc); border-radius: 50px 50px 0 0; padding: 20px; transition: transform 0.3s, box-shadow 0.3s; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
                            <div class="icon d-flex justify-content-center mb-3">
                                <img src="images/integration.png" alt="Integration" class="img-fluid" style="max-width: 80px; border-radius: 50%;">
                            </div>
                            <h3 class="feature-title text-center" style="color: #252850; font-weight: bold;">Integración y Escalabilidad</h3>
                            <p class="text-center" style="color: #252850;">Nuestras soluciones están diseñadas para crecer con tu negocio, permitiendo la integración con otros sistemas y una escalabilidad sin límites.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



    
    <!-- End Why Choose Us Section -->

    <style>
        .feature-title::after {
            content: "";
            display: block;
            width: 30%;
            height: 4px;
            background: #0056b3;
            transition: width 0.3s ease;
            margin-top: 5px;
        }

        .feature-card:hover .feature-title::after {
            width: 100%;
        }
    </style>




    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Start We Help Section -->
<div class="we-help-section" style="background: #00b4d8; padding: 50px 0;" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                <!-- Contenedor de imágenes para Misión -->
                <br><br>
                <div id="imgs-grid-mision" class=" active" style="display: flex; gap: 10px; justify-content: center; align-items: center; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    <div class="grid grid-1" style="width: 30%; height: 130px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                        <img src="images/cohete.gif" alt="Misión" class="grid-img" style="width: 100%; height: 100%; object-fit: contain; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    </div>
                    <div class="grid grid-2" style="width: 30%; height: 130px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                        <img src="images/diana.png" alt="Objetivos" class="grid-img" style="width: 100%; height: 100%; object-fit: contain; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    </div>
                    <div class="grid grid-3" style="width: 30%; height: 130px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                        <img src="images/crecimientox.png" alt="Crecimiento" class="grid-img" style="width: 100%; height: 100%; object-fit: contain; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    </div>
                </div>

                <!-- Contenedor de imágenes para Visión -->
                <div id="imgs-grid-vision" class="" style="display: none; gap: 10px; justify-content: center; align-items: center; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    <div class="grid grid-1" style="width: 30%; height: 130px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                        <img src="images/vision1.png" alt="Innovación" class="grid-img" style="width: 100%; height: 100%; object-fit: contain; border-radius: 10px; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    </div>
                    <div class="grid grid-2" style="width: 30%; height: 130px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                        <img src="images/vision2.png" alt="Liderazgo" class="grid-img" style="width: 100%; height: 100%; object-fit: contain; border-radius: 10px; opacity: 0.9; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    </div>
                    <div class="grid grid-3" style="width: 30%; height: 130px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                        <img src="images/vision3.png" alt="Excelencia" class="grid-img" style="width: 100%; height: 100%; object-fit: contain; border-radius: 10px; opacity: 0.9; transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ps-lg-5" data-aos="fade-left" data-aos-delay="400">
                <div id="content-mision" class="content-section active" style="transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; opacity: 1;">
                    <h2 class="section-title mb-4" style="color: #252850; font-weight: bold;">Misión</h2>
                    <p style="color: #ffffff; font-size: 16px; line-height: 1.6;">Nuestra misión es proporcionar
                        soluciones tecnológicas innovadoras y personalizadas que impulsen el crecimiento y la eficiencia
                        de nuestros clientes. Nos enfocamos en la excelencia, la adaptabilidad y el compromiso con el
                        éxito de cada proyecto, convirtiéndonos en socios estratégicos en la transformación digital de
                        las empresas.</p>
                </div>
                <div id="content-vision" class="content-section" style="transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; opacity: 0; display: none;">
                    <h2 class="section-title mb-4" style="color: #252850; font-weight: bold;">Visión</h2>
                    <p style="color: #ffffff; font-size: 16px; line-height: 1.6;">Nuestra visión es ser líderes en el
                        mercado de soluciones TI, reconocidos por nuestra innovación, calidad y compromiso con la
                        satisfacción del cliente. Aspiramos a marcar una diferencia significativa en cada proyecto,
                        ayudando a las empresas a alcanzar su máximo potencial a través de la tecnología.</p>
                </div>
                <br>
                <p>
                <button id="toggleButton" class="btn" style="background-color: #252850; color: white; border: none; border-radius: 20px; padding: 10px 20px; display: flex; align-items: center; gap: 10px; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);" 
        onmouseover="this.style.backgroundColor='#4a4fb1'" 
        onmouseout="this.style.backgroundColor='#252850'" 
        onclick="toggleContent()">
    <span id="buttonText">Ver Visión</span>
    <span class="arrow" style="display: inline-block; transition: transform 0.3s, color 0.3s; font-weight: bold; font-size: 18px; color: white;">
        →
    </span>
</button>

                </p>
            </div>
        </div>
    </div>
</div>
<!-- End We Help Section -->




<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();

    function toggleContent() {
        const mision = document.getElementById('content-mision');
        const vision = document.getElementById('content-vision');
        const imgsGridMision = document.getElementById('imgs-grid-mision');
        const imgsGridVision = document.getElementById('imgs-grid-vision');
        const buttonText = document.getElementById('buttonText');

        // Añade animación de salida
        mision.style.transform = 'translateY(20px)';
        vision.style.transform = 'translateY(20px)';
        imgsGridMision.style.transform = 'translateY(20px)';
        imgsGridVision.style.transform = 'translateY(20px)';
        mision.style.opacity = '0';
        vision.style.opacity = '0';
        imgsGridMision.style.opacity = '0';
        imgsGridVision.style.opacity = '0';

        // Espera para ejecutar el cambio de contenido
        setTimeout(() => {
            if (mision.style.display === 'none') {
                mision.style.display = 'block';
                imgsGridMision.style.display = 'flex';
                vision.style.display = 'none';
                imgsGridVision.style.display = 'none';
                buttonText.innerText = 'Ver Visión';
            } else {
                mision.style.display = 'none';
                imgsGridMision.style.display = 'none';
                vision.style.display = 'block';
                imgsGridVision.style.display = 'flex';
                buttonText.innerText = 'Ver Misión';
            }

            // Añade animación de entrada
            setTimeout(() => {
                mision.style.transform = 'translateY(0)';
                vision.style.transform = 'translateY(0)';
                imgsGridMision.style.transform = 'translateY(0)';
                imgsGridVision.style.transform = 'translateY(0)';
                mision.style.opacity = '1';
                vision.style.opacity = '1';
                imgsGridMision.style.opacity = '1';
                imgsGridVision.style.opacity = '1';
            }, 50); // Espera un poco antes de mostrar los nuevos elementos
        }, 500); // Ajusta este valor según la duración de la animación de salida
    }

    // Add hover effect to arrow and button
    document.getElementById('toggleButton').addEventListener('mouseover', function () {
        document.querySelector('.arrow').style.transform = 'translateX(5px)';
        this.style.transform = 'translateY(-3px)';
        this.style.boxShadow = '0 6px 10px rgba(0, 0, 0, 0.2)';
        this.style.backgroundColor = '#004d40'; // Darker teal effect
    });

    document.getElementById('toggleButton').addEventListener('mouseout', function () {
        document.querySelector('.arrow').style.transform = 'translateX(0)';
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        this.style.backgroundColor = '#00796b'; // Original color
    });

    // Prevent the initial scaling issue
    document.addEventListener('DOMContentLoaded', () => {
        const images = document.querySelectorAll('.grid-img');
        images.forEach((img) => {
            img.style.transition = 'none'; // Disable transitions initially
            setTimeout(() => {
                img.style.transition = ''; // Re-enable transitions after load
            }, 10);
        });
    });
</script>



        <!-- Start Corporate Values Section -->
<div class="popular-product" style="background: #1a1a2e; padding: 60px 0;" id="corporate-values">
    <div class="container">
        <h2 class="section-title text-center mb-5" style="color: #00b4d8; font-weight: bold;">Valores Corporativos</h2>
        <div class="row justify-content-center">
            <!-- Confianza -->
            <div class="col-12 col-md-6 col-lg-6 mb-4 d-flex align-items-stretch">
                <div class="product-item-sm d-flex align-items-center justify-content-center card-value"
                    style="background: #16213e; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); padding: 25px; width: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative; overflow: hidden;">
                    <div style="font-size: 48px; color: #00b4d8; font-weight: bold; margin-right: 20px; position: relative;">
                        01
                        <div style="position: absolute; top: 0; right: -15px; width: 4px; height: 120%; background: #00b4d8;"></div>
                    </div>
                    <div>
                        <h3 style="color: #00b4d8; font-weight: bold; position: relative;">Confianza</h3>
                        <p style="color: #ddd; font-size: 16px; line-height: 1.6;">Fomentamos un ambiente de confianza y seguridad en todas nuestras relaciones, tanto con nuestros clientes como dentro de nuestro equipo.</p>
                    </div>
                </div>
            </div>

            <!-- Transparencia -->
            <div class="col-12 col-md-6 col-lg-6 mb-4 d-flex align-items-stretch">
                <div class="product-item-sm d-flex align-items-center justify-content-center card-value"
                    style="background: #16213e; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); padding: 25px; width: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative; overflow: hidden;">
                    <div style="font-size: 48px; color: #00b4d8; font-weight: bold; margin-right: 20px; position: relative;">
                        02
                        <div style="position: absolute; top: 0; right: -15px; width: 4px; height: 120%; background: #00b4d8;"></div>
                    </div>
                    <div>
                        <h3 style="color: #00b4d8; font-weight: bold; position: relative;">Transparencia</h3>
                        <p style="color: #ddd; font-size: 16px; line-height: 1.6;">Nos comprometemos a mantener una comunicación clara y honesta en todas nuestras interacciones, garantizando la confianza mutua.</p>
                    </div>
                </div>
            </div>

            <!-- Responsabilidad -->
            <div class="col-12 col-md-6 col-lg-6 mb-4 d-flex align-items-stretch">
                <div class="product-item-sm d-flex align-items-center justify-content-center card-value"
                    style="background: #16213e; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); padding: 25px; width: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative; overflow: hidden;">
                    <div style="font-size: 48px; color: #00b4d8; font-weight: bold; margin-right: 20px; position: relative;">
                        03
                        <div style="position: absolute; top: 0; right: -15px; width: 4px; height: 120%; background: #00b4d8;"></div>
                    </div>
                    <div>
                        <h3 style="color: #00b4d8; font-weight: bold; position: relative;">Responsabilidad</h3>
                        <p style="color: #ddd; font-size: 16px; line-height: 1.6;">Asumimos con seriedad nuestras responsabilidades y trabajamos constantemente para cumplir con nuestros compromisos de manera ética.</p>
                    </div>
                </div>
            </div>

            <!-- Integridad -->
            <div class="col-12 col-md-6 col-lg-6 mb-4 d-flex align-items-stretch">
                <div class="product-item-sm d-flex align-items-center justify-content-center card-value"
                    style="background: #16213e; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); padding: 25px; width: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative; overflow: hidden;">
                    <div style="font-size: 48px; color: #00b4d8; font-weight: bold; margin-right: 20px; position: relative;">
                        04
                        <div style="position: absolute; top: 0; right: -15px; width: 4px; height: 120%; background: #00b4d8;"></div>
                    </div>
                    <div>
                        <h3 style="color: #00b4d8; font-weight: bold; position: relative;">Integridad</h3>
                        <p style="color: #ddd; font-size: 16px; line-height: 1.6;">Operamos con los más altos estándares de integridad, asegurando que cada acción refleje nuestros valores éticos y compromiso.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Corporate Values Section -->


    

    <script>
        // Animations for section entry and hover effects
        function animateOnScroll() {
            const section = document.getElementById('corporate-values');
            const cards = document.querySelectorAll('.card-value');
            const sectionPosition = section.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;

            if (sectionPosition < screenPosition) {
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 200);
                });
            }
        }

        // Trigger animation when section is in view
        window.addEventListener('scroll', animateOnScroll);

        document.querySelectorAll('.card-value').forEach(card => {
            card.addEventListener('mouseover', function () {
                this.style.transform = 'scale(1.05)';
                this.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.2)';
            });

            card.addEventListener('mouseout', function () {
                this.style.transform = 'scale(1)';
                this.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
            });
        });
    </script>

    <style>
        .card-value {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
    </style>

    
<!-- Start Our Services Section -->
<div class="our-services-section" style="background: #f8f9fa; padding: 60px 0;">
    <div class="container">
        <h2 class="section-title text-center mb-5" style="color: #252850; font-weight: bold; font-size: 36px;">Nuestros Servicios</h2>
        
        <div class="row justify-content-center">
            <!-- Servicio 1 -->
            <div class="col-lg-4 mb-4">
                <div class="service-card" style="border-radius: 15px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: white;">
                    <!-- Imagen en la parte superior -->
                    <img src="images/soporte.jpg" alt="Soporte y Diagnóstico TI" style="width: 100%; height: 200px; object-fit: cover;">
                    <!-- Sección de contenido -->
                    <div class="card-content text-center" style="background: linear-gradient(135deg, #252850, #ff758c); padding: 20px; color: white;">
                        <h3 style="font-weight: bold;">Soporte y Diagnóstico TI</h3>
                        <hr>
                        <p>Ofrecemos servicios de soporte técnico para diagnosticar y solucionar problemas de TI.</p>
                    </div>
                </div>
            </div>

            <!-- Servicio 2 -->
            <div class="col-lg-4 mb-4">
                <div class="service-card" style="border-radius: 15px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: white;">
                    <!-- Imagen en la parte superior -->
                    <img src="images/desarrollo.jpeg" alt="Desarrollo de Software Personalizado" style="width: 100%; height: 200px; object-fit: cover;">
                    <!-- Sección de contenido -->
                    <div class="card-content text-center" style="background: linear-gradient(135deg, #252850, #00e0ff); padding: 20px; color: white;">
                        <h3 style="font-weight: bold;">Software Personalizado</h3>
                        <hr>
                        <p>Creamos soluciones de software a medida que se adaptan a las necesidades específicas de tu negocio.</p>
                    </div>
                </div>
            </div>

            <!-- Servicio 3 -->
            <div class="col-lg-4 mb-4">
                <div class="service-card" style="border-radius: 15px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: white;">
                    <!-- Imagen en la parte superior -->
                    <img src="images/consultoria.png" alt="Consultoría en Transformación Digital" style="width: 100%; height: 200px; object-fit: cover;">
                    <!-- Sección de contenido -->
                    <div class="card-content text-center" style="background: linear-gradient(135deg, #707070, #c4c4c4); padding: 20px; color: white;">
                        <h3 style="font-weight: bold;">Consultoría en Transformación Digital</h3>
                        <hr>
                        <p>Te guiamos en el proceso de transformación digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our Services Section -->

<!-- CSS personalizado dentro del mismo archivo HTML -->
<style>
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card-content a:hover {
        background: white;
        color: #333;
        transition: background 0.3s, color 0.3s;
    }
</style>




    <script>
        // Añade una animación de entrada cuando se desplaza a la sección
        document.addEventListener('DOMContentLoaded', function() {
            const serviceSections = document.querySelectorAll('.our-services-section .row');
            serviceSections.forEach((section) => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(50px)';
            });

            window.addEventListener('scroll', function() {
                serviceSections.forEach((section) => {
                    const sectionPosition = section.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;

                    if (sectionPosition < screenPosition) {
                        section.style.opacity = '1';
                        section.style.transform = 'translateY(0)';
                        section.style.transition = 'all 0.6s ease-out';
                    }
                });
            });
        });
    </script>

        <!-- Start Footer Section -->
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


    <!-- End Footer Section -->



        <!-- JavaScript -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/tiny-slider.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>

    </html>
    <!-- Inicializar AOS -->
    <script>
        AOS.init({
            duration: 1000, // Duración de la animación en milisegundos
            easing: 'ease-in-out', // Tipo de animación
            once: true // Animar solo una vez al entrar en la vista
        });
    </script>