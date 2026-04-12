<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comercializacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    {{-- Maquesina de promociones --}}
    <div class="marquee-container">
        <div class="marquee-content">
            <span>
                🎓 <b>Si sos estudiante de la UNNE tenés un 25% OFF</b> |
                🚚 Envíos a todo el país |
                💳 10% OFF pagando con Mercado Pago |
                🏫 Hacé tu compra y retirá en el Campus |
                🎓 <b>Si sos estudiante de la UNNE tenés un 25% OFF</b> |
                🚚 Envíos a todo el país |
                💳 10% OFF pagando con Mercado Pago |
                🏫 Hacé tu compra y retirá en el Campus |
            </span>
            <span>
                🎓 <b>Si sos estudiante de la UNNE tenés un 25% OFF</b> |
                🚚 Envíos a todo el país |
                💳 10% OFF pagando con Mercado Pago |
                🏫 Hacé tu compra y retirá en el Campus |
                🎓 <b>Si sos estudiante de la UNNE tenés un 25% OFF</b> |
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

    <section class="container my-5 py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">

                {{-- Título: Agregamos la clase text-center --}}
                <h2 class="display-4 fw-bold mb-4 text-center" style="color: #021A54; min-height: 1.2em;">
                    Tienda UNNE es <span id="typewriter"></span>
                </h2>

                {{-- Texto de Presentación --}}
                <div class="presentation-text">
                    <p>La Tienda UNNE nace para fortalecer el sentido de pertenencia de toda la comunidad universitaria,
                        ofreciendo productos que reflejan nuestra identidad. Como universidad a la vanguardia en
                        tecnología y desarrollo sustentable, cada artículo representa innovación, compromiso y cuidado
                        del ambiente. Nuestra tienda virtual reúne indumentaria y accesorios pensados para llevar el
                        orgullo UNNE en el día a día. Más que una tienda, es una forma de conectar con los valores de
                        una institución que mira hacia el futuro.</p>
                </div>
            </div>
        </div>
    </section>



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
