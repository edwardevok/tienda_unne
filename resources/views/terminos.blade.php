<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Condiciones | Tienda UNNE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/terminos.css') }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300..900&display=swap" rel="stylesheet">
</head>

<body> @include('partials.navbar')

    {{-- Banner Superior --}}
    <section class="hero-legal position-relative d-flex align-items-center justify-content-center text-center">
        <div class="overlay-hero"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <h1 class="display-3 fw-bold text-white mb-3">Avisos Legales</h1>
                    <p class="lead text-white-50 mb-0">
                        Términos, Condiciones y Política de Privacidad
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5 py-4">
        <div class="row">

            {{-- COLUMNA IZQUIERDA: Índice Manual --}}
            <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                <div class="menu-legal-flotante bg-white p-4 rounded shadow-sm">
                    <h5 class="fw-bold mb-3 text-azul-unne">Índice Legal</h5>
                    <nav class="nav flex-column" id="nav-legal">
                        <a class="link-legal active" href="#terminos">1. Términos y Usos</a>
                        <a class="link-legal" href="#privacidad">2. Políticas de Privacidad</a>
                        <a class="link-legal" href="#ventas">3. Procedimientos de Venta</a>
                        <a class="link-legal" href="#envios">4. Entregas y Tiempos</a>
                        <a class="link-legal" href="#garantias">5. Garantías y Postventa</a>
                    </nav>
                </div>
            </div>

            {{-- COLUMNA DERECHA: Contenido --}}
            <div class="col-12 col-lg-9">
                <div class="cuerpo-legal bg-white p-4 p-md-5 rounded shadow-sm">
                    <section id="terminos">
                        <p class="text-muted mb-5">
                            <em>Última actualización: Abril de 2026. Al utilizar los servicios de la Tienda UNNE, el
                                usuario
                                acepta de plena conformidad los siguientes términos y condiciones.</em>
                        </p>
                        <h2>1. Términos y Usos del Sitio Web</h2>
                        <p>El presente documento establece las condiciones generales de uso del sitio web de la Tienda
                            Oficial de la Universidad Nacional del Nordeste (en adelante, "Tienda UNNE"). El acceso y
                            uso de este sitio web le otorga la condición de "Usuario".</p>
                        <p>Todo el contenido de este sitio web es propiedad exclusiva de la Universidad Nacional del
                            Nordeste y está protegido por las leyes de propiedad intelectual vigentes.</p>
                    </section>

                    <section id="privacidad">
                        <h2>2. Políticas de Privacidad</h2>
                        <p>Tienda UNNE se compromete a proteger la privacidad de los usuarios. Los datos personales
                            recabados serán incorporados a una base de datos automatizada gestionada por la Universidad.
                        </p>
                    </section>

                    <section id="ventas">
                        <h2>3. Procedimientos de Venta</h2>
                        <p>La disponibilidad de los productos está sujeta al stock físico. La compra solo se considerará
                            perfeccionada una vez que el sistema de pagos confirme la acreditación de los fondos.</p>
                    </section>

                    <section id="envios">
                        <h2>4. Entregas, Tiempos y Envíos</h2>
                        <p>Los envíos son realizados a través de operadores logísticos tercerizados. Los tiempos
                            estipulados son estimativos y comienzan a correr a partir del despacho.</p>
                    </section>

                    <section id="garantias">
                        <h2>5. Garantías y Soporte Postventa</h2>
                        <p>Contamos con una garantía de 30 días corridos para cambios por fallas de fabricación. El
                            producto debe ser devuelto sin uso y con etiquetas originales.</p>
                    </section>


                </div>
            </div>

        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.link-legal');

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // 1. Limpieza total de cualquier rastro de 'active'
                    links.forEach(l => l.classList.remove('active'));

                    // 2. Aplicar active solo al elemento clickeado
                    this.classList.add('active');

                    // 3. Scroll suave y milimétrico (compensando la navbar)
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    const navHeight = 130;

                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - navHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>

</html>
