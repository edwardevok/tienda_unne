<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- NavBar --}}
    @include('partials.navbar')

    {{-- Banner --}}
    <section class="hero-quienes-somos position-relative d-flex align-items-center justify-content-center text-center">

        {{-- Capa oscura para que el texto resalte (Overlay) --}}
        <div class="overlay-hero"></div>

        {{-- Contenido del Banner --}}
        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    {{-- Un pequeño subtítulo naranja para darle elegancia --}}
                    <span class="text-uppercase fw-bold mb-2 d-block" style="color: #FF6600; letter-spacing: 2px;">
                        Tienda Oficial
                    </span>
                    <h1 class="display-3 fw-bold text-white mb-3">Nuestros Productos</h1>
                    <p class="lead text-white-50 mb-0">
                        Llevando el orgullo de la Universidad Nacional del Nordeste a tu día a día.
                    </p>
                </div>
            </div>
        </div>

    </section>

    {{-- Cuerpo --}}
    <section class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
            <h2 class="fw-bold" style="color: #021A54;">Catálogo UNNE</h2>
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle fw-bold" type="button" id="filterDropdown"
                    data-bs-toggle="dropdown">
                    Todas las categorías
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item active" href="#" onclick="filterCategory('all', this)">Todas</a>
                    </li>
                    <li><a class="dropdown-item" href="#"
                            onclick="filterCategory('indumentaria', this)">Indumentaria</a></li>
                    <li><a class="dropdown-item" href="#"
                            onclick="filterCategory('accesorios', this)">Accesorios</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterCategory('libreria', this)">Librería y
                            Estudio</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterCategory('hogar', this)">Hogar y
                            Utilidad</a></li>
                </ul>
            </div>
        </div>

        <div class="row g-4" id="products-grid">

            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="indumentaria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/remera.png') }}" class="card-img-top p-2 square-img" alt="Remera">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Remera Blanca UNNE</h6>
                        <p class="text-primary mb-3">$15.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="indumentaria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/buzo.png') }}" class="card-img-top p-2 square-img" alt="Hoodie">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Hoodie Gris Premium</h6>
                        <p class="text-primary mb-3">$32.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="indumentaria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/campera.png') }}" class="card-img-top p-2 square-img" alt="Campera">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Campera Varsity UNNE</h6>
                        <p class="text-primary mb-3">$45.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="indumentaria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/Chomba.png') }}" class="card-img-top p-2 square-img" alt="Chomba">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Chomba Polo Azul</h6>
                        <p class="text-primary mb-3">$22.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="accesorios">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/mochila.png') }}" class="card-img-top p-2 square-img" alt="Mochila">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Mochila Porta Notebook</h6>
                        <p class="text-primary mb-3">$38.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="accesorios">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/gorra.png') }}" class="card-img-top p-2 square-img" alt="Gorro">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Gorra UNNE</h6>
                        <p class="text-primary mb-3">$7.500</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="accesorios">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/totebag.png') }}" class="card-img-top p-2 square-img" alt="Tote">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Tote Bag Ecológica</h6>
                        <p class="text-primary mb-3">$5.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="accesorios">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/llavero.png') }}" class="card-img-top p-2 square-img" alt="Llavero">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Llavero Metálico</h6>
                        <p class="text-primary mb-3">$3.500</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="accesorios">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/pulcera.png') }}" class="card-img-top p-2 square-img" alt="Pulsera">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Pulsera Bordada</h6>
                        <p class="text-primary mb-3">$2.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="libreria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/agenda.png') }}" class="card-img-top p-2 square-img" alt="Agenda">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Agenda 2026 UNNE</h6>
                        <p class="text-primary mb-3">$14.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="libreria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/carpeta.png') }}" class="card-img-top p-2 square-img" alt="Carpeta">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Carpeta Universitaria</h6>
                        <p class="text-primary mb-3">$9.500</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="libreria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/lapicera.png') }}" class="card-img-top p-2 square-img" alt="Lapicera">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Lapicera Ejecutiva</h6>
                        <p class="text-primary mb-3">$6.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="libreria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/mousepad.png') }}" class="card-img-top p-2 square-img" alt="Mousepad">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Mousepad Ergonómico</h6>
                        <p class="text-primary mb-3">$4.800</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="libreria">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/stickers.png') }}" class="card-img-top p-2 square-img" alt="Stickers">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Pack Stickers UNNE</h6>
                        <p class="text-primary mb-3">$1.500</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="hogar">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/taza.png') }}" class="card-img-top p-2 square-img" alt="Taza">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Taza de Cerámica</h6>
                        <p class="text-primary mb-3">$4.500</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="hogar">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/termo.png') }}" class="card-img-top p-2 square-img" alt="Termo">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Termo Negro Mate</h6>
                        <p class="text-primary mb-3">$25.000</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="hogar">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/mate.png') }}" class="card-img-top p-2 square-img" alt="Mate">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Mate UNNE</h6>
                        <p class="text-primary mb-3">$12.500</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="hogar">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/botella.png') }}" class="card-img-top p-2 square-img" alt="Botella">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Botella Deportiva</h6>
                        <p class="text-primary mb-3">$8.900</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 product-card" data-category="accesorios">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('img/bufanda.png') }}" class="card-img-top p-2 square-img" alt="Bufanda">
                    <div class="card-body text-center">
                        <h6 class="fw-bold">Bufanda Institucional</h6>
                        <p class="text-primary mb-3">$6.800</p>
                        <button onclick="window.location.href='{{ url('/paginaenconstruccion') }}'"
                            class="btn btn-orange btn-sm w-100">Agregar</button>
                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- Footer --}}
    @include('partials.footer')


    <script>
        function filterCategory(category, element) {
            // UI: Cambiar item activo
            document.querySelectorAll('.dropdown-item').forEach(item => item.classList.remove('active'));
            element.classList.add('active');
            document.getElementById('filterDropdown').innerText = element.innerText;

            // Lógica de filtrado
            const cards = document.querySelectorAll('.product-card');
            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
