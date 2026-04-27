<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comercializacion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Comercializacion</title>
</head>

<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Banner --}}
    <!-- Banner de bienvenida -->
    {{-- Cuerpo --}}
    <section class="hero-quienes-somos position-relative d-flex align-items-center justify-content-center text-center">

        {{-- Capa oscura para que el texto resalte (Overlay) --}}
        <div class="overlay-hero"></div>

        {{-- Contenido del Banner --}}
        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <h1 class="display-3 fw-bold text-white mb-3">Comercializacion</h1>
                    <p class="lead text-white-50 mb-0">
                        Pagos seguros, envíos rápidos y todo lo que necesitás saber
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="container my-5 py-5 border rounded shadow-sm bg-white">
        <div class="row g-5">

            <div class="col-md-6 border-end">
                <div class="p-3">
                    <div class="d-flex align-items-center mb-4">
                        <span class="material-symbols-outlined me-3 text-primary" style="font-size: 2.5rem;">
                            payments
                        </span>
                        <h2 class="fw-bold mb-0" style="color: #021A54;">Métodos de Pago y Descuentos</h2>
                    </div>

                    <p class="text-secondary mb-5">Elige tu método de pago preferido y aprovecha nuestros beneficios
                        exclusivos para la comunidad universitaria.</p>

                    <div class="d-flex align-items-center p-3 mb-4 rounded border" style="background-color: #f8f9fa;">
                        <div class="me-4 text-center">
                            <span class="material-symbols-outlined text-success" style="font-size: 3rem;">
                                workspace_premium
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1 text-success">25% OFF Directo</h5>
                            <p class="mb-0 text-dark">Pagando con Tarjeta de Afinidad UNNE (Débito/Crédito).</p>
                            <span class="text-muted small">*Válido para estudiantes, docentes y no docentes.</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center p-3 mb-4 rounded border" style="background-color: #f8f9fa;">
                        <div class="me-4 text-center">
                            <span class="material-symbols-outlined text-primary" style="font-size: 3rem;">
                                account_balance
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1 text-primary">10% OFF Adicional</h5>
                            <p class="mb-0 text-dark">Pagando mediante Transferencia Bancaria o Depósito.</p>
                            <span class="text-muted small">*El descuento se aplica sobre el total del carrito.</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center p-3 rounded border" style="background-color: #f8f9fa;">
                        <div class="me-4 text-center">
                            <span class="material-symbols-outlined text-info" style="font-size: 3rem;">
                                qr_code_scanner
                            </span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1 text-info">Cuotas Sin Interés</h5>
                            <p class="mb-0 text-dark">Pagando con Mercado Pago (según promociones vigentes).</p>
                            <span class="text-muted small">*Consulta las tarjetas y bancos adheridos en la
                                plataforma.</span>
                        </div>
                    </div>

                    <div class="mt-5 p-3 rounded text-center" style="background-color: #e2e6ea;">
                        <p class="mb-0 small text-secondary">
                            <span class="material-symbols-outlined align-middle me-1" style="font-size: 1.2rem;">
                                info
                            </span>
                            Los descuentos no son acumulables entre sí, salvo indicación contraria.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-3">
                    <div class="d-flex align-items-center mb-5">
                        <span class="material-symbols-outlined me-3 text-primary" style="font-size: 2.5rem;">
                            account_balance_wallet
                        </span>
                        <h2 class="fw-bold mb-0" style="color: #021A54;">Medios Admitidos</h2>
                    </div>

                    <div class="medios-admitidos-filas">

                        <div class="row align-items-center py-4 border-bottom">
                            <div class="col-4 d-flex align-items-center">
                                <span class="material-symbols-outlined me-2 text-success"
                                    style="font-size: 1.8rem;">payments</span>
                                <span class="fw-bold h6 mb-0" style="color: #021A54;">Efectivo</span>
                            </div>
                            <div class="col-8 text-end">
                                <img src="{{ asset('img/mercado.png') }}" alt="Pago Facil" class="img-logo me-3">
                                <img src="{{ asset('img/pago.png') }}" alt="Rapipago" class="img-logo">
                            </div>
                        </div>

                        <div class="row align-items-center py-4 border-bottom">
                            <div class="col-4 d-flex align-items-center">
                                <span class="material-symbols-outlined me-2 text-info"
                                    style="font-size: 1.8rem;">credit_card</span>
                                <span class="fw-bold h6 mb-0" style="color: #021A54;">Tarjetas</span>
                            </div>
                            <div class="col-8 text-end">
                                <img src="{{ asset('img/visa.png') }}" alt="Visa" class="img-logo me-3">
                                <img src="{{ asset('img/santander.png') }}" alt="Mastercard" class="img-logo me-3">
                                <img src="{{ asset('img/ae.png') }}" alt="Amex" class="img-logo">
                            </div>
                        </div>

                        <div class="row align-items-center py-4 border-bottom">
                            <div class="col-4 d-flex align-items-center">
                                <span class="material-symbols-outlined me-2 text-warning"
                                    style="font-size: 1.8rem;">qr_code_scanner</span>
                                <span class="fw-bold h6 mb-0" style="color: #021A54;">Billetera Virtual</span>
                            </div>
                            <div class="col-8 text-end">
                                <img src="{{ asset('img/mercado.png') }}" alt="Mercado Pago" class="img-logo">
                            </div>
                        </div>

                        <div class="row align-items-center py-4">
                            <div class="col-4 d-flex align-items-center">
                                <span class="material-symbols-outlined me-2 text-danger"
                                    style="font-size: 1.8rem;">account_balance</span>
                                <span class="fw-bold h6 mb-0" style="color: #021A54;">Transferencia</span>
                            </div>
                            <div class="col-8 text-end BancosGrid">
                                <img src="{{ asset('img/bbva.png') }}" alt="BBVA" class="img-logo-sm me-2">
                                <img src="{{ asset('img/bna.png') }}" alt="Galicia" class="img-logo-sm me-2">
                                <img src="{{ asset('img/santander.png') }}" alt="Santander" class="img-logo-sm">
                            </div>
                        </div>

                    </div>
                    <div class="mt-5 p-3 rounded text-center" style="border: 1px dashed #021A54;">
                        <p class="mb-0 small text-dark fw-bold">
                            <span class="material-symbols-outlined align-middle me-1"
                                style="color: #FF6600;">verified</span>
                            Transacciones 100% encriptadas y seguras.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>


    {{-- Detalle de Beneficios (Ampliación) --}}
    <section class="container my-5 py-4">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold" style="color: #021A54;">¿Por qué comprar en Tienda UNNE?</h2>
            <p class="text-secondary">Conocé en detalle todos los beneficios que tenemos preparados para la comunidad.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            {{-- Tarjeta 1: Envíos --}}
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-lift"
                    style="transition: transform 0.3s ease;">
                    <div class="mb-3">
                        <span class="material-symbols-outlined rounded-circle p-3"
                            style="font-size: 2.5rem; color: #FF6600; background-color: rgba(255, 102, 0, 0.1);">
                            local_shipping
                        </span>
                    </div>
                    <h5 class="fw-bold" style="color: #021A54;">Envíos a todo el país</h5>
                    <p class="text-secondary small mb-0">
                        Disfrutá de <strong>Envío Gratis</strong> en compras que superen los $50.000.
                        Trabajamos con logística de confianza a través de <strong>Correo Argentino</strong> y
                        <strong>Andreani</strong> para asegurar que tu paquete llegue a destino de forma rápida y
                        segura.
                    </p>
                </div>
            </div>

            {{-- Tarjeta 2: Pagos --}}
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-lift"
                    style="transition: transform 0.3s ease;">
                    <div class="mb-3">
                        <span class="material-symbols-outlined rounded-circle p-3"
                            style="font-size: 2.5rem; color: #FF6600; background-color: rgba(255, 102, 0, 0.1);">
                            credit_card
                        </span>
                    </div>
                    <h5 class="fw-bold" style="color: #021A54;">Pagos Financiados</h5>
                    <p class="text-secondary small mb-0">
                        Aprovechá <strong>3 cuotas sin interés</strong> con todas las tarjetas de crédito emitidas por
                        la Universidad. Además, aceptamos tarjetas <strong>Visa, Mastercard</strong> y operamos con
                        promociones exclusivas del <strong>Banco de Corrientes</strong>.
                    </p>
                </div>
            </div>

            {{-- Tarjeta 3: Cambios --}}
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-lift"
                    style="transition: transform 0.3s ease;">
                    <div class="mb-3">
                        <span class="material-symbols-outlined rounded-circle p-3"
                            style="font-size: 2.5rem; color: #FF6600; background-color: rgba(255, 102, 0, 0.1);">
                            cached
                        </span>
                    </div>
                    <h5 class="fw-bold" style="color: #021A54;">Política de Cambios</h5>
                    <p class="text-secondary small mb-0">
                        Tenés hasta <strong>30 días corridos</strong> desde la recepción de tu compra para solicitar un
                        cambio de talle o modelo. El artículo debe estar sin uso, con sus etiquetas originales y en el
                        empaque en el que fue entregado.
                    </p>
                </div>
            </div>

            {{-- Tarjeta 4: Seguridad --}}
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4 hover-lift"
                    style="transition: transform 0.3s ease;">
                    <div class="mb-3">
                        <span class="material-symbols-outlined rounded-circle p-3"
                            style="font-size: 2.5rem; color: #FF6600; background-color: rgba(255, 102, 0, 0.1);">
                            verified_user
                        </span>
                    </div>
                    <h5 class="fw-bold" style="color: #021A54;">Compra 100% Segura</h5>
                    <p class="text-secondary small mb-0">
                        Nuestro sitio cuenta con <strong>certificados SSL</strong> que encriptan tu información personal
                        y financiera de extremo a extremo. Cumplimos con la Ley de Protección de Datos Personales para
                        garantizar tu total privacidad.
                    </p>
                </div>
            </div>

        </div>
    </section>






    {{-- Preguntas frecuentes --}}
    <section class="container mt-5 pt-5 mb-5 pb-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold" style="color: #021A54;">Preguntas frecuentes</h2>
            <hr class="mx-auto" style="width: 60px; border: 2px solid #FF6600; opacity: 1;">
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-3 text-center text-md-start" style="color: #021A54;">General</h3>

                    <div class="accordion accordion-flush border rounded shadow-sm" id="faqGeneral">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gen1">
                                    ¿Quiénes pueden optar a un descuento del 25% para estudiantes?
                                </button>
                            </h2>
                            <div id="gen1" class="accordion-collapse collapse show"
                                data-bs-parent="#faqGeneral">
                                <div class="accordion-body text-secondary">
                                    <p>Todos los estudiantes matriculados en la UNNE con correo institucional activo
                                        acceden al beneficio automáticamente al validar sus datos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#gen2">
                                    ¿Qué métodos de pago aceptan?
                                </button>
                            </h2>
                            <div id="gen2" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                <div class="accordion-body text-secondary">
                                    <p>Aceptamos tarjetas de crédito/débito, Mercado Pago y transferencias bancarias.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-3 text-center text-md-start" style="color: #021A54;">Envíos, devoluciones
                        y cambios</h3>

                    <div class="accordion accordion-flush border rounded shadow-sm" id="faqEnvios">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#env1">
                                    ¿Cuánto tiempo tardará en llegar mi compra?
                                </button>
                            </h2>
                            <div id="env1" class="accordion-collapse collapse" data-bs-parent="#faqEnvios">
                                <div class="accordion-body text-secondary">
                                    <p>El procesamiento tarda de 1 a 3 días hábiles. El tiempo de envío final depende de
                                        tu
                                        ubicación (2 a 5 días promedio).</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#env2">
                                    ¿Cómo puedo cancelar un pedido o devolver un artículo?
                                </button>
                            </h2>
                            <div id="env2" class="accordion-collapse collapse" data-bs-parent="#faqEnvios">
                                <div class="accordion-body text-secondary">
                                    <p>Puedes gestionar devoluciones dentro de los 30 días contactándonos a través de
                                        nuestro formulario oficial.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-0">
                    <h3 class="h4 fw-bold mb-3 text-center text-md-start" style="color: #021A54;">Compra online y
                        recoge en tienda</h3>

                    <div class="accordion accordion-flush border rounded shadow-sm" id="faqRecogida">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#pick1">
                                    ¿Cuánto tiempo tardará en estar listo el pedido?
                                </button>
                            </h2>
                            <div id="pick1" class="accordion-collapse collapse" data-bs-parent="#faqRecogida">
                                <div class="accordion-body text-secondary">
                                    <p>Estará listo en aproximadamente 2 a 4 días hábiles. Te avisaremos por correo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#pick2">
                                    ¿Dónde puedo recoger el pedido?
                                </button>
                            </h2>
                            <div id="pick2" class="accordion-collapse collapse" data-bs-parent="#faqRecogida">
                                <div class="accordion-body text-secondary">
                                    <p>En los puntos de retiro oficiales de Campus Sargento Cabral o Campus Resistencia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Barra de informacion  --}}
    <section class="w-100 py-5" style="background-color: #021A54;">
        <div class="container">
            <div class="row text-center g-4">

                <div class="col-6 col-md-3">
                    <span class="material-symbols-outlined mb-2 d-block text-white" style="font-size: 3rem;">
                        local_shipping
                    </span>
                    <p class="small mb-0 text-white fw-bold">Envío Gratis</p>
                    <p class="small mb-0 text-white opacity-75">en compras +$50.000</p>
                </div>

                <div class="col-6 col-md-3">
                    <span class="material-symbols-outlined mb-2 d-block text-white" style="font-size: 3rem;">
                        credit_card
                    </span>
                    <p class="small mb-0 text-white fw-bold">3 Cuotas sin interés</p>
                    <p class="small mb-0 text-white opacity-75">con tarjetas UNNE</p>
                </div>

                <div class="col-6 col-md-3">
                    <span class="material-symbols-outlined mb-2 d-block text-white" style="font-size: 3rem;">
                        cached
                    </span>
                    <p class="small mb-0 text-white fw-bold">Cambios simples</p>
                    <p class="small mb-0 text-white opacity-75">30 días para devoluciones</p>
                </div>

                <div class="col-6 col-md-3">
                    <span class="material-symbols-outlined mb-2 d-block text-white" style="font-size: 3rem;">
                        verified_user
                    </span>
                    <p class="small mb-0 text-white fw-bold">Compra Segura</p>
                    <p class="small mb-0 text-white opacity-75">Protección de datos</p>
                </div>

            </div>
        </div>
    </section>







    {{-- Footer --}}
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
