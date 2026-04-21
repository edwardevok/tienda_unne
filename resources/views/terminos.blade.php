<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminos y condiciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/terminos.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
     {{-- NavBar --}}
    @include('partials.navbar')
    {{-- NavBar end --}}

{{-- Header de la página --}}
    <header class="py-5 text-center" style="background-color: #000b76;">
        <div class="container py-4">
            <h1 class="display-4 fw-bold text-white mb-2">Aviso Legal</h1>
            <p class="lead text-white-50 mb-0">Términos, Condiciones y Políticas de Privacidad</p>
        </div>
    </header>

    <div class="container my-5 py-4">
        <div class="row">
            
            {{-- COLUMNA IZQUIERDA: Índice Flotante (Ocupa 3 columnas) --}}
            <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                <div class="menu-legal-flotante bg-white p-4 rounded shadow-sm">
                    <h5 class="fw-bold mb-3" style="color: #021A54;">Índice Legal</h5>
                    <nav class="nav flex-column">
                        <a class="link-legal active" href="#terminos">1. Términos y Usos</a>
                        <a class="link-legal" href="#privacidad">2. Políticas de Privacidad</a>
                        <a class="link-legal" href="#ventas">3. Procedimientos de Venta</a>
                        <a class="link-legal" href="#envios">4. Entregas y Tiempos</a>
                        <a class="link-legal" href="#garantias">5. Garantías y Postventa</a>
                    </nav>
                </div>
            </div>

            {{-- COLUMNA DERECHA: El texto largo (Ocupa 9 columnas) --}}
            <div class="col-12 col-lg-9">
                <div class="cuerpo-legal bg-white p-4 p-md-5 rounded shadow-sm">
                    
                    <p class="text-muted mb-5"><em>Última actualización: Abril de 2026. Al utilizar los servicios de la Tienda UNNE, el usuario acepta de plena conformidad los siguientes términos y condiciones.</em></p>

                    <section id="terminos">
                        <h2>1. Términos y Usos del Sitio Web</h2>
                        <p>El presente documento establece las condiciones generales de uso del sitio web de la Tienda Oficial de la Universidad Nacional del Nordeste (en adelante, "Tienda UNNE"). El acceso y uso de este sitio web le otorga la condición de "Usuario", implicando la aceptación plena y sin reservas de todas y cada una de las disposiciones incluidas en este Aviso Legal. Los servicios y productos ofrecidos están destinados exclusivamente a la comunidad universitaria y al público en general con fines lícitos y académicos.</p>
                        <p>Todo el contenido de este sitio web, incluyendo textos, gráficos, logotipos, iconos, imágenes, descargas digitales y compilaciones de datos, es propiedad exclusiva de la Universidad Nacional del Nordeste o de sus proveedores de contenido, y está protegido por las leyes de propiedad intelectual vigentes. Queda terminantemente prohibida la reproducción, distribución, comunicación pública y transformación de dichos contenidos sin la autorización expresa y por escrito de las autoridades correspondientes.</p>
                    </section>

                    <section id="privacidad">
                        <h2>2. Políticas de Privacidad</h2>
                        <p>En cumplimiento de la Ley N° 25.326 de Protección de los Datos Personales de la República Argentina, Tienda UNNE se compromete a proteger la privacidad de los usuarios. Los datos personales recabados a través de los formularios de registro, compras y contacto serán incorporados a una base de datos automatizada cuyo responsable es la Universidad Nacional del Nordeste, con la única finalidad de gestionar las operaciones comerciales, facturación y envío de productos.</p>
                        <p>La Tienda UNNE garantiza que bajo ninguna circunstancia comercializará, cederá ni compartirá los datos personales de sus usuarios con empresas de terceros ajenas a la operatoria logística del envío (ej. Correo Argentino). El usuario tiene el derecho de acceso, rectificación, actualización y supresión de sus datos en cualquier momento, enviando una solicitud formal a través de nuestros canales de contacto oficiales. Asimismo, el sitio web utiliza cookies para mejorar la experiencia de navegación del usuario, las cuales pueden ser desactivadas desde la configuración de su navegador web.</p>
                    </section>

                    <section id="ventas">
                        <h2>3. Procedimientos de Venta</h2>
                        <p>La disponibilidad de los productos ofrecidos en la Tienda UNNE está sujeta al stock físico en nuestros depósitos. Al momento de confirmar un pedido, el sistema emitirá un comprobante digital que el usuario recibirá en su casilla de correo electrónico. La compra solo se considerará perfeccionada una vez que el sistema de pagos (Mercado Pago o transferencia bancaria) confirme la acreditación de los fondos correspondientes.</p>
                        <p>La universidad se reserva el derecho de cancelar operaciones comerciales en caso de detectar irregularidades, falta de stock imprevista o imposibilidad de procesar el pago, procediendo en tales casos al reintegro total del dinero al comprador por la misma vía en que fue abonado.</p>
                    </section>

                    <section id="envios">
                        <h2>4. Entregas, Tiempos y Envíos</h2>
                        <p>Los envíos a domicilio son realizados a través de operadores logísticos tercerizados. Los tiempos de entrega estipulados (entre 3 y 5 días hábiles) son estimativos y comienzan a correr a partir de la acreditación del pago y el despacho del producto. La Tienda UNNE no se hace responsable por demoras ocasionadas por paros, contingencias climáticas o errores en la carga de la dirección de destino por parte del usuario.</p>
                        <p>Para la modalidad de "Retiro en Sede", el usuario dispone de un plazo máximo de 15 días corridos desde la confirmación de empaquetado para retirar su compra. Cumplido dicho plazo, la orden será cancelada y el producto volverá al inventario general.</p>
                    </section>

                    <section id="garantias">
                        <h2>5. Garantías y Soporte Postventa</h2>
                        <p>Todos los productos de indumentaria y merchandising oficial cuentan con una garantía de 30 (treinta) días corridos desde la fecha de recepción del producto para realizar cambios por fallas de fabricación, talle o disconformidad. El producto debe ser devuelto en sus mismas condiciones, sin uso, sin lavar y con sus etiquetas originales.</p>
                        <p>Nuestro equipo de soporte postventa se encuentra disponible de lunes a viernes de 8:00 a 16:00 hs para atender cualquier reclamo o consulta referida al estado de los pedidos, calidad de los artículos o inconvenientes con la plataforma web, asegurando una resolución pacífica y eficiente para toda nuestra comunidad.</p>
                    </section>

                </div>
            </div>

        </div>
    </div>


     {{-- Footer --}}
    @include('partials.footer')
    {{-- Footer end --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>