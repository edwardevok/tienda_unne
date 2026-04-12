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
    {{-- Sección Hero Banner --}}
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
