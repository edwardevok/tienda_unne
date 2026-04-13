<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tienda UNNE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    {{-- Barra de Navegacion --}}
    <nav class="navbar navbar-expand-lg py-2" style="background-color: #021A54;" data-bs-theme="dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo_unne.png') }}" alt="Logo UNNE" style="height: 80px; object-fit: contain;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link nav-link-custom active text-white fw-bold" aria-current="page" href="#">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-custom" href="#">Quienes Somos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-custom" href="#">Productos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-custom" href="#">Comercializacion</a>
    </li>
    <li class="nav-item">
        <a class="nav-link nav-link-custom" href="#">Contacto</a>
    </li>
</ul>
            </div>

        </div>
    </nav>

    {{-- Maquesina de promociones --}}
    <div class="marquee-container">
        <div class="marquee-content">
            <span class="marquesina">
                🎓 Si sos estudiante de la UNNE tenés un 25% OFF |
                🚚 Envíos a todo el país |
                💳 10% OFF pagando con Mercado Pago |
                🏫 Hacé tu compra y retirá en el Campus |
                🎓 Si sos estudiante de la UNNE tenés un 25% OFF |
                🚚 Envíos a todo el país |
                💳 10% OFF pagando con Mercado Pago |
                🏫 Hacé tu compra y retirá en el Campus |
            </span>
            <span class="marquesina">
                🎓 Si sos estudiante de la UNNE tenés un 25% OFF |
                🚚 Envíos a todo el país |
                💳 10% OFF pagando con Mercado Pago |
                🏫 Hacé tu compra y retirá en el Campus |
                🎓 Si sos estudiante de la UNNE tenés un 25% OFF |
                🚚 Envíos a todo el país |
                💳 10% OFF pagando con Mercado Pago |
                🏫 Hacé tu compra y retirá en el Campus |
            </span>
        </div>
    </div>

    {{-- Banner Principal --}}
    

    <section class="banner-container w-100">
        {{-- Banner para Pantallas Grandes (Desktop) --}}
        <div class="d-none d-md-block w-100">
            <img src="{{ asset('img/banner.png') }}" class="img-fluid w-100" alt="Tienda UNNE - Identidad que nos une"
                style="object-fit: cover;">
        </div>

        {{-- Banner para Móviles (Mobile) --}}
        <div class="d-block d-md-none w-100">
            <img src="{{ asset('img/banner_movil.png') }}" class="img-fluid w-100" alt="Tienda UNNE Móvil">
        </div>
    </section>

    
    {{-- Sección de Presentación --}}
<div class="py-5" style="background-color: #b8d6f1;">
    <div class="container">
        
        {{-- align-items-center es la clase que centra verticalmente el contenido de las columnas --}}
        <div class="row align-items-center">

            {{-- COLUMNA 1: LA IMAGEN (Ocupa 5 de 12 en PC) --}}
            {{-- text-center centra la imagen horizontalmente. mb-4 da un margen abajo en celulares --}}
            <div class="col-12 col-lg-5 text-center mb-4 mb-lg-0 d-none d-lg-block">
                {{-- Puse una imagen de relleno, acordate de cambiar el src por tu asset --}}
                <img src="{{ asset('img/img1.png') }}" alt="Comunidad UNNE" class="img-fluid rounded" style="max-height: 350px; object-fit: cover;">
            </div>

            {{-- COLUMNA 2: EL TEXTO (Más grande, ocupa 7 de 12 en PC) --}}
            <div class="col-12 col-lg-7">

              <h1 class="display-5 fw-bold mb-4" style="color: #021A54; text-align: center;">
    Tienda UNNE es 
    {{-- d-block empuja la palabra abajo en móviles. d-md-inline la devuelve al lado en PC --}}
    <span id="typewriter" class="d-block d-md-inline" style="min-height: 1.5em;"></span>
</h1>
                
                {{-- Texto de Presentación --}}
                <div class="presentation-text">
                    {{-- Volví a agregarle el 'lead' y los estilos para que se lea mejor --}}
                    <p>
                        La Tienda UNNE nace para fortalecer el sentido de pertenencia de toda la comunidad universitaria,
                        ofreciendo productos que reflejan nuestra identidad. Como universidad a la vanguardia en
                        tecnología y desarrollo sustentable, cada artículo representa innovación, compromiso y cuidado
                        del ambiente. Nuestra tienda virtual reúne indumentaria y accesorios pensados para llevar el
                        orgullo UNNE en el día a día. Más que una tienda, es una forma de conectar con los valores de
                        una institución que mira hacia el futuro.
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>

    {{-- Sección de Productos --}}
    <div class="container mb-5 mt-5">
        
        {{-- Metí el título adentro del mismo container para asegurar que mantenga la misma línea --}}
        <h2 class="display-4 fw-bold mb-5 text-center" style="color: #021A54; min-height: 1.2em;">Categorías</h2>
        
        <div class="row g-4">

            <div class="col-12 col-md-6 col-lg-3">
    <div class="card h-100 border-0">
        
        <div class="text-center pt-4">
            <span class="material-symbols-rounded" style="font-size: 80px; color: #021A54;">
                apparel
            </span>
        </div>

        <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title fw-bold" style="color: #021A54;">Indumentaria</h5>
        </div>
        
    </div>
</div>

             <div class="col-12 col-md-6 col-lg-3">
    <div class="card h-100 border-0">
        
        <div class="text-center pt-4">
            <span class="material-symbols-rounded" style="color: #021A54; font-size: 80px;">personal_bag</span>
        </div>

        <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title fw-bold" style="color: #021A54;">Accsesorios</h5>
        </div>
        
    </div>
</div>

             <div class="col-12 col-md-6 col-lg-3">
    <div class="card h-100 border-0">
        
        <div class="text-center pt-4">
            <span class="material-symbols-rounded" style="font-size: 80px; color: #021A54;">
                ink_pen
            </span>
        </div>

        <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title fw-bold" style="color: #021A54;">Útiles</h5>
        </div>
        
    </div>
</div>

             <div class="col-12 col-md-6 col-lg-3">
    <div class="card h-100 border-0">
        
        <div class="text-center pt-4">
            <span class="material-symbols-rounded" style="font-size: 80px; color: #021A54;">
                water_bottle
            </span>
        </div>

        <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title fw-bold" style="color: #021A54;">Botellas y termos</h5>
        </div>
        
    </div>
</div>

        </div>
    </div>
    


    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <script>
        var app = document.getElementById('typewriter');

        var typewriter = new Typewriter(app, {
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
