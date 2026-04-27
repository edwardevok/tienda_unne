<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda UNNE | Identidad Universitaria</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300..900&display=swap" rel="stylesheet">
</head>

<body>

    {{-- Barra de Navegación --}}
    @include('partials.navbar')

    {{-- Marquesina de Promociones --}}
    <div class="marquee-container">
        <div class="marquee-content">
            <span class="marquesina">
                🎓 Si sos estudiante de la UNNE tenés un 25% OFF | 🚚 Envíos a todo el país | 💳 10% OFF pagando con
                Mercado Pago | 🏫 Retirá en el Campus |
                🎓 Si sos estudiante de la UNNE tenés un 25% OFF | 🚚 Envíos a todo el país | 💳 10% OFF pagando con
                Mercado Pago | 🏫 Retirá en el Campus |
            </span>
            <span class="marquesina">
                🎓 Si sos estudiante de la UNNE tenés un 25% OFF | 🚚 Envíos a todo el país | 💳 10% OFF pagando con
                Mercado Pago | 🏫 Retirá en el Campus |
                🎓 Si sos estudiante de la UNNE tenés un 25% OFF | 🚚 Envíos a todo el país | 💳 10% OFF pagando con
                Mercado Pago | 🏫 Retirá en el Campus |
            </span>
        </div>
    </div>

    {{-- Banners Principales (Responsive) --}}
    <section class="banner-container">
        <div class="d-none d-md-block">
            <img src="{{ asset('img/banner.png') }}" class="img-fluid w-100" alt="Tienda UNNE Desktop">
        </div>
        <div class="d-block d-md-none">
            <img src="{{ asset('img/banner_movil.png') }}" class="img-fluid w-100" alt="Tienda UNNE Móvil">
        </div>
    </section>

    {{-- Sección de Presentación --}}
    <section class="seccion-presentacion py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center d-none d-lg-block">
                    <img src="{{ asset('img/img1.png') }}" alt="Comunidad UNNE" class="img-fluid img-presentacion">
                    {{-- Quitamos 'rounded' y 'shadow-sm' --}}
                </div>
                <div class="col-12 col-lg-7">
                    <h1 class="display-5 fw-bold mb-4">
                        Tienda UNNE es <span id="typewriter" class="d-block d-md-inline"></span>
                    </h1>
                    <div class="presentation-text">
                        <p>
                            La Tienda UNNE nace para fortalecer el sentido de pertenencia de toda la comunidad
                            universitaria, ofreciendo productos que reflejan nuestra identidad. Como universidad a la
                            vanguardia en tecnología y desarrollo sustentable, cada artículo representa innovación,
                            compromiso y cuidado del ambiente. Nuestra tienda virtual reúne indumentaria y accesorios
                            pensados para llevar el orgullo UNNE en el día a día.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sección de Categorías --}}
    <section class="container-fluid px-0 m-0"> {{-- m-0 elimina márgenes externos --}}
        <div class="row g-0 m-0 p-0"> {{-- g-0 y m-0 aseguran que la fila no tenga desbordes ni espacios --}}

            <div class="col-6 col-lg-3">
                <a href="/productos" class="categoria-cuadrado"
                    style="background-image: url('{{ asset('img/indumentaria.png') }}');">
                    <div class="categoria-overlay">
                        <span class="material-symbols-rounded mb-2">apparel</span>
                        <h3 class="categoria-titulo">Indumentaria</h3>
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-3">
                <a href="/productos" class="categoria-cuadrado"
                    style="background-image: url('{{ asset('img/accesorios.png') }}');">
                    <div class="categoria-overlay">
                        <span class="material-symbols-rounded mb-2">personal_bag</span>
                        <h3 class="categoria-titulo">Accesorios</h3>
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-3">
                <a href="/productos" class="categoria-cuadrado"
                    style="background-image: url('{{ asset('img/libreria.png') }}');">
                    <div class="categoria-overlay">
                        <span class="material-symbols-rounded mb-2">ink_pen</span>
                        <h3 class="categoria-titulo">Útiles</h3>
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-3">
                <a href="/productos" class="categoria-cuadrado"
                    style="background-image: url('{{ asset('img/hogar.png') }}');">
                    <div class="categoria-overlay">
                        <span class="material-symbols-rounded mb-2">water_bottle</span>
                        <h3 class="categoria-titulo">Bazar</h3>
                    </div>
                </a>
            </div>

        </div>
    </section>

    {{-- Sección de Productos Destacados --}}
    <section class="py-5 bg-destacados">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">Destacados</h2>

            <div id="carruselDestacados" class="carousel slide pb-5" data-bs-ride="carousel">
                <div class="carousel-indicators" style="bottom: 0;">
                    <button type="button" data-bs-target="#carruselDestacados" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#carruselDestacados" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carruselDestacados" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-10 col-md-6 col-lg-4">
                                <div class="card border-0 product-card bg-transparent text-center">
                                    <div class="contenedor-foto-producto shadow-sm mb-3">
                                        <img src="{{ asset('img/mate.png') }}" class="img-fluid" alt="Mate UNNE">
                                    </div>
                                    <h6 class="text-muted">Mate Térmico</h6>
                                    <p class="precio-producto">$18.000,00</p>
                                    <a href="#" class="btn-buy">
                                        <span class="text-decoration-underline">Comprar</span>
                                        <span class="material-symbols-rounded">local_mall</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-10 col-md-6 col-lg-4">
                                <div class="card border-0 product-card bg-transparent text-center">
                                    <div class="contenedor-foto-producto shadow-sm mb-3">
                                        <img src="{{ asset('img/paraguas.png') }}" class="img-fluid"
                                            alt="Paraguas UNNE">
                                    </div>
                                    <h6 class="text-muted">Paraguas Institucional</h6>
                                    <p class="precio-producto">$27.000,00</p>
                                    <a href="#" class="btn-buy">
                                        <span class="text-decoration-underline">Comprar</span>
                                        <span class="material-symbols-rounded">local_mall</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev btn-carrusel" type="button"
                    data-bs-target="#carruselDestacados" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next btn-carrusel" type="button"
                    data-bs-target="#carruselDestacados" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Configuración del Typewriter
        const app = document.getElementById('typewriter');
        const typewriter = new Typewriter(app, {
            loop: true,
            delay: 75,
        });

        typewriter
            .pauseFor(500)
            .typeString('<span style="color: #FF6600;">identidad</span>')
            .pauseFor(2000)
            .deleteAll()
            .typeString('<span style="color: #FF6600;">comunidad</span>')
            .pauseFor(2000)
            .deleteAll()
            .typeString('<span style="color: #FF6600;">futuro</span>')
            .pauseFor(2000)
            .start();
    </script>
</body>

</html>
