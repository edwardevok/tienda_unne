<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/quienes_somos.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        
    <title>Document</title>
</head>
<body>
    {{-- NavBar --}}
    @include('partials.navbar')
    {{-- NavBar end --}}

    {{-- Hero start --}}
    {{-- Banner de "Quiénes Somos" --}}
    <section class="hero-quienes-somos position-relative d-flex align-items-center justify-content-center text-center">
        
        {{-- Capa oscura para que el texto resalte (Overlay) --}}
        <div class="overlay-hero"></div>

        {{-- Contenido del Banner --}}
        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    {{-- Un pequeño subtítulo naranja para darle elegancia --}}
                    <span class="text-uppercase fw-bold mb-2 d-block" style="color: #FF6600; letter-spacing: 2px;">
                        Nuestra Historia
                    </span>
                    <h1 class="display-3 fw-bold text-white mb-3">Quiénes Somos</h1>
                    <p class="lead text-white-50 mb-0">
                        Llevando el orgullo de la Universidad Nacional del Nordeste a tu día a día.
                    </p>
                </div>
            </div>
        </div>
        
    </section>

    {{-- Acá abajo después podés agregar el resto de la página (el texto, fotos de la tienda, etc) --}}
    <div class="container my-5 py-5">
        <h2 class="text-center" style="color: #021A54;">Próximamente el contenido...</h2>
    </div>

    {{-- Footer --}}
    @include('partials.footer')
    {{-- Footer end --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>