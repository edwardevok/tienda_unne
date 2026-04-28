<footer class="py-5" style="background-color: #1a1a1a; color: #ffffff;">
    <div class="container">
        <div class="row g-4 text-center text-md-start">

            <div class="col-12 col-md-4 d-flex align-items-center justify-content-center justify-content-md-start">
                <a href="#">
                    <img src="{{ asset('img/logo_footer.png') }}" alt="Logo UNNE"
                        style="height: 200px; object-fit: contain;">
                </a>
            </div>

            <div class="col-12 col-md-4">
                <h5 class="fw-bold mb-4" style="color: #ffffff;">Categorías</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="/index" class="footer-link-custom text-decoration-none">Inicio</a>
                    </li>
                    <li class="mb-2">
                        <a href="/quienes-somos" class="footer-link-custom text-decoration-none">Quienes Somos</a>
                    </li>
                    <li class="mb-2">
                        <a href="/productos" class="footer-link-custom text-decoration-none">Productos</a>
                    </li>
                    <li class="mb-2">
                        <a href="/comercializacion" class="footer-link-custom text-decoration-none">Comercializacion</a>
                    </li>
                    <li class="mb-2">
                        <a href="/contacto" class="footer-link-custom text-decoration-none">Contacto</a>
                    </li>
                    <li class="mb-2">
                        <a href="/terminos" class="footer-link-custom text-decoration-none">Terminos y condiciones</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-md-4">
                <h5 class="fw-bold mb-4" style="color: #ffffff;">Contactanos</h5>

                <p
                    class="mb-2 d-flex align-items-center justify-content-center justify-content-md-start gap-2 texto_foot">
                    <span class="material-symbols-rounded" style="font-size: 20px;">mail</span>
                    <a href="mailto:tienda@unne.edu.ar" class="text-decoration-none" style="color: inherit;">
                        tienda@unne.edu.ar
                    </a>
                </p>

                <p
                    class="mb-2 d-flex align-items-center justify-content-center justify-content-md-start gap-2 texto_foot">
                    <span class="material-symbols-rounded" style="font-size: 20px;">location_on</span>
                    Campus Universitario, Corrientes/Resistencia
                </p>
            </div>

        </div>

        <hr class="mt-5 opacity-25" style="background-color: #ffffff;">
        <div class="text-center mt-4 pt-2">
            <p class="texto_foot2">© 2026 Tienda UNNE - Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<script>
    // 1. Guardamos el título original de la página
    let tituloOriginal = document.title;

    // 2. Creamos nuestra lista de mensajes persuasivos (y amenazantes 😅)
    const mensajesAusencia = [
        "¡Ey, volvé! 🛒",
        "¡Tenemos Descuentos! 💸",
        "¡Reprobarás Taller 1! 😱"
    ];

    let intervaloTitulo; // Variable para guardar el "reloj"
    let indiceActual = 0; // Para saber qué mensaje toca mostrar

    // 3. Escuchamos si el usuario se va o vuelve
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            // El usuario se fue. 
            // Mostramos el primer mensaje inmediatamente
            document.title = mensajesAusencia[0];
            indiceActual = 1;

            // Iniciamos un reloj que cambia el título cada 2 segundos (2000 milisegundos)
            intervaloTitulo = setInterval(function() {
                document.title = mensajesAusencia[indiceActual];

                // Pasamos al siguiente mensaje. Si llegamos al final, volvemos a empezar al índice 0
                indiceActual = (indiceActual + 1) % mensajesAusencia.length;
            }, 2000);

        } else {
            // El usuario volvió asustado por Taller 1. 
            // Apagamos el reloj para que deje de cambiar el texto
            clearInterval(intervaloTitulo);

            // Restauramos el título normal de la tienda
            document.title = tituloOriginal;
        }
    });
</script>
