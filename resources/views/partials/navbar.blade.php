<nav class="navbar navbar-expand-lg py-2 sticky-top" style="background-color: #021A54;" data-bs-theme="dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ url('/index') }}">
            <img src="{{ asset('img/logo_unne.png') }}" alt="Logo UNNE" style="height: 65px; object-fit: contain;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('index') || Request::is('/') ? 'active fw-bold text-white' : '' }}"
                        href="/index">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('quienes-somos') ? 'active fw-bold text-white' : '' }}"
                        href="/quienes-somos">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('productos') ? 'active fw-bold text-white' : '' }}"
                        href="/productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('comercializacion') ? 'active fw-bold text-white' : '' }}"
                        href="/comercializacion">Comercialización</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('contacto') ? 'active fw-bold text-white' : '' }}"
                        href="/contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('terminos') ? 'active fw-bold text-white' : '' }}"
                        href="/terminos">Términos y Condiciones</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
