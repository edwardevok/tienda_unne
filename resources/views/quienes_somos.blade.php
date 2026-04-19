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

    {{-- Hero end --}}

        {{-- mision,vision y valores start --}}
    {{-- Sección Misión, Visión y Valores --}}
<section class="py-5 bg-light">
    <div class="container my-5">
        
        <div class="text-center mb-5">
            <span class="text-uppercase fw-bold mb-2 d-block" style="color: #FF6600; letter-spacing: 2px;">
                Nuestra Esencia
            </span>
            <h2 class="display-6 fw-bold texto-azul-unne">Misión, Visión y Valores</h2>
        </div>

        <div class="row g-4">
            
            {{-- 1. MISIÓN --}}
            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm h-100 tarjeta-valor text-center p-4">
                    <div class="card-body">
                        <span class="material-symbols-rounded icono-valor">my_location</span>
                        <h4 class="fw-bold texto-azul-unne mb-3">Misión</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            Brindar a la comunidad universitaria productos de alta calidad que representen el orgullo y la identidad de la UNNE, facilitando el acceso a través de una plataforma moderna y eficiente.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 2. VISIÓN --}}
            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm h-100 tarjeta-valor text-center p-4">
                    <div class="card-body">
                        <span class="material-symbols-rounded icono-valor">visibility</span>
                        <h4 class="fw-bold texto-azul-unne mb-3">Visión</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            Ser la tienda universitaria referente en toda la región, destacando por nuestra innovación, compromiso con la sustentabilidad y el fomento del sentido de pertenencia.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 3. VALORES --}}
            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm h-100 tarjeta-valor text-center p-4">
                    <div class="card-body">
                        <span class="material-symbols-rounded icono-valor">favorite</span>
                        <h4 class="fw-bold texto-azul-unne mb-3">Valores</h4>
                        <p class="text-muted" style="line-height: 1.7;">
                            Identidad institucional, Transparencia en la gestión, Calidad garantizada, Innovación constante y Compromiso total con nuestra comunidad estudiantil y docente.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="display: block; width: 100%; height: auto; background-color: #f8f9fa;">
        <path fill="#000b76" fill-opacity="1" d="M0,96L60,128C120,160,240,224,360,213.3C480,203,600,117,720,112C840,107,960,181,1080,208C1200,235,1320,213,1380,202.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>

    {{-- Presentacion de nosotros start --}}
{{-- Sección de Nuestro Equipo con Marcos --}}
{{-- Sección de Nuestro Equipo con Marcos --}}
{{-- Sección de Nuestro Equipo con Parallax y Capa Azul --}}
<section class="parallax-equipo">
    
    {{-- La capa azul --}}
    <div class="overlay-azul"></div>

    {{-- El contenido (con z-index para estar arriba de la capa) --}}
    <div class="container position-relative" style="z-index: 2;">
        
        <h2 class="display-5 fw-bold text-center mb-5 pb-3 text-white">El Equipo Detrás de la Tienda</h2>

        {{-- MARCO PERSONA 1 --}}
        <div class="fila-equipo">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                    <img src="{{ asset('img/yo.png') }}" alt="Nombre 1" class="img-fluid rounded shadow-sm equipo-img">
                </div>
                <div class="col-12 col-md-7 ps-md-4">
                    <h3 class="fw-bold mb-1 texto-azul-unne">Nombre de la Persona 1</h3>
                    <h6 class="text-uppercase mb-3 equipo-rol">Director del Proyecto</h6>
                    <p class="text-muted equipo-texto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, quo? Laboriosam iure quia aliquid obcaecati sit distinctio expedita cupiditate delectus tempora facere dicta eum, sint ex illo! Perferendis, architecto inventore.
                    </p>
                </div>
            </div>
        </div>

        {{-- MARCO PERSONA 2 --}}
        <div class="fila-equipo mb-0">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 pe-md-4 order-2 order-md-1">
                    <h3 class="fw-bold mb-1 texto-azul-unne">Nombre de la Persona 2</h3>
                    <h6 class="text-uppercase mb-3 equipo-rol">Coordinadora de Ventas</h6>
                    <p class="text-muted equipo-texto">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dicta accusantium ab culpa facere quae? Ipsam odit, suscipit aperiam incidunt iure fugiat labore repellendus, reiciendis et aut voluptatibus non recusandae?
                    </p>
                </div>
                <div class="col-12 col-md-5 mb-4 mb-md-0 order-1 order-md-2">
                    <img src="{{ asset('img/yo.png') }}" alt="Nombre 2" class="img-fluid rounded shadow-sm equipo-img">
                </div>
            </div>
        </div>

    </div>
</section>
    {{-- Presentacion de nosotros end --}}


    {{-- mision,vision y valores end --}}

    {{-- Footer --}}
    @include('partials.footer')
    {{-- Footer end --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>