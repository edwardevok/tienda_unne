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

    {{-- Cuerpo --}}
    <section class="w-100 mb-5">
        <img src="{{ asset('img/bannerC.jpg') }}" class="img-fluid w-100" alt="Contacto Tienda UNNE"
            style="height: 350px; object-fit: cover;">
    </section>

    <section class="container mb-5">
        <div class="row g-4">

            <div class="col-md-7">
                <div class="card h-100 shadow-sm border-0 overflow-hidden" style="min-height: 400px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.123456789!2d-58.8341!3d-27.4692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDI4JzA5LjEiUyA1OMKwNTAnMDIuOCJX!5e0!3m2!1ses!2sar!4v1620000000000"
                        width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card h-100 shadow-sm border-0 p-4" style="background-color: #f8f9fa;">
                    <div class="card-body">
                        <h2 class="fw-bold mb-4" style="color: #021A54;">Ubicaciones</h2>

                        <div class="mb-4">
                            <h5 class="fw-bold text-primary mb-1">Campus Sargento Cabral</h5>
                            <p class="mb-1"><i class="bi bi-geo-alt"></i> Juan Bautista Cabral 2131, Corrientes</p>
                            <p class="text-muted small"><i class="bi bi-clock"></i> Lunes a Viernes: 08:00 - 20:00 hs
                            </p>
                        </div>

                        <hr>

                        <div class="mt-4">
                            <h5 class="fw-bold text-primary mb-1">Campus Deodoro Roca</h5>
                            <p class="mb-1"><i class="bi bi-geo-alt"></i> Av. Libertad 5470, Corrientes</p>
                            <p class="text-muted small"><i class="bi bi-clock"></i> Lunes a Viernes: 09:00 - 18:00 hs
                            </p>
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
                                    Todos los estudiantes matriculados en la UNNE con correo institucional activo
                                    acceden al beneficio automáticamente al validar sus datos.
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
                                    Aceptamos tarjetas de crédito/débito, Mercado Pago y transferencias bancarias.
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
                                    El procesamiento tarda de 1 a 3 días hábiles. El tiempo de envío final depende de tu
                                    ubicación (2 a 5 días promedio).
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
                                    Puedes gestionar devoluciones dentro de los 30 días contactándonos a través de
                                    nuestro formulario oficial.
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
                                    Estará listo en aproximadamente 2 a 4 días hábiles. Te avisaremos por correo.
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
                                    En los puntos de retiro oficiales de Campus Sargento Cabral o Campus Resistencia.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Ponte en contacto --}}
    <section class="container mb-5 pb-5 mt-0 pt-0 text-center">
        <div class="mb-3">
            <span class="material-symbols-outlined" style="font-size: 4rem; color: #021A54;">
                forum
            </span>
        </div>

        <h2 class="fw-bold mb-3" style="color: #021A54;">Ponte en contacto</h2>
        <p class="text-secondary mx-auto" style="max-width: 600px;">
            ¿Tiene alguna pregunta sobre su pedido o alguna consulta general?
            Nuestro equipo está listo para ayudarte de forma inmediata por WhatsApp.
        </p>

        <div class="mt-4">
            <a href="https://wa.me/543794000000?text=Hola!%20Tengo%20una%20consulta%20sobre%20la%20Tienda%20UNNE"
                target="_blank" class="btn btn-lg px-5 py-3 fw-bold text-white shadow"
                style="background-color: #FF6600; border-radius: 50px; border: none; transition: 0.3s;">
                <i class="bi bi-whatsapp me-2"></i> Contáctanos
            </a>
        </div>
    </section>


    {{-- Footer --}}
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
