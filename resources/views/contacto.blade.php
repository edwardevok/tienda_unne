<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminos y condiciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
         {{-- NavBar --}}
    @include('partials.navbar')
    {{-- NavBar end --}}
    
    <!-- Banner de bienvenida -->
         {{-- Cuerpo --}}
    <section class="hero-quienes-somos position-relative d-flex align-items-center justify-content-center text-center">
        
        {{-- Capa oscura para que el texto resalte (Overlay) --}}
        <div class="overlay-hero"></div>

        {{-- Contenido del Banner --}}
        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    {{-- Un pequeño subtítulo naranja para darle elegancia --}}
                    <span class="text-uppercase fw-bold mb-2 d-block" style="color: #FF6600; letter-spacing: 2px;">
                        CONECTÁ CON NOSOTROS
                    </span>
                    <h1 class="display-3 fw-bold text-white mb-3">¡Escribinos!</h1>
                    <p class="lead text-white-50 mb-0">
                        Estamos para escucharte. Aquí resolvemos tus dudas sobre envíos, cambios o reclamos de la Tienda UNNE.
                    </p>
                </div>
            </div>
        </div>
        
    </section>

    <!-- Mapa y cards de direcciones -->

    <section class="container mb-5 mt-5">
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



    {{-- Ponte en contacto --}}
    <section class="container mb-5 pb-5 mt-0 pt-0 text-center">
        
        <h2 class="fw-bold mb-3" style="color: #021A54;">Ponte en contacto</h2>
        <p class="text-secondary mx-auto mb-5" style="max-width: 600px;">
            ¿Tienes alguna duda sobre tu pedido o una consulta general de la Tienda UNNE?
            Completa el formulario y te responderemos a la brevedad.
        </p>

        {{-- Formulario de Contacto (con ID agregado) --}}
        <form id="formContacto" action="#" class="text-start mx-auto p-4 shadow-sm rounded" style="max-width: 600px; background-color: #f8f9fa;">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nombre" class="form-label text-secondary fw-bold">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Juan" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="apellido" class="form-label text-secondary fw-bold">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej. Pérez" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="mail" class="form-label text-secondary fw-bold">Correo Electrónico</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="tu@email.com" required>
            </div>

            <div class="mb-4">
                <label for="consulta" class="form-label text-secondary fw-bold">Consulta</label>
                <textarea class="form-control" id="consulta" name="consulta" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-lg px-5 py-3 fw-bold text-white shadow w-100" 
                    style="background-color: #FF6600; border-radius: 50px; border: none; transition: 0.3s;">
                    Enviar Mensaje
                </button>
            </div>
        </form>
    </section>

    <div class="modal fade" id="modalAgradecimiento" tabindex="-1" aria-labelledby="modalAgradecimientoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                {{-- Encabezado con los colores de la Tienda --}}
                <div class="modal-header text-white" style="background-color: #021A54; border-bottom: 4px solid #FF6600;">
                    <h5 class="modal-title fw-bold" id="modalAgradecimientoLabel">¡Mensaje Recibido!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                {{-- Cuerpo del Modal --}}
                <div class="modal-body text-center p-5">
                    {{-- Usando el icono de Material Symbols que ya tenías en tu head --}}
                    <span class="material-symbols-outlined mb-3" style="font-size: 5rem; color: #FF6600;">
                        check_circle
                    </span>
                    <h3 class="fw-bold mb-3" style="color: #021A54;">¡Gracias, <span id="modalNombreUsuario"></span>!</h3>
                    <p class="text-secondary fs-5 mb-0">
                        Nos pondremos en contacto a la brevedad respondiendo a tu correo:<br>
                        <strong class="text-dark" id="modalMailUsuario"></strong>
                    </p>
                </div>
                
                {{-- Footer del Modal --}}
                <div class="modal-footer justify-content-center border-0 pb-4 pt-0">
                    <button type="button" class="btn px-4 py-2 text-white fw-bold" style="background-color: #021A54; border-radius: 50px;" data-bs-dismiss="modal">
                        Aceptar
                    </button>
                </div>
            </div>
        </div>
    </div>


     {{-- Footer --}}
    @include('partials.footer')
    {{-- Footer end --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Capturamos el formulario y el modal
        const formulario = document.getElementById("formContacto");
        const modal = new bootstrap.Modal(document.getElementById("modalAgradecimiento"));

        formulario.addEventListener("submit", function (evento) {
            // Evitamos que la página se recargue al enviar
            evento.preventDefault();

            // Obtenemos los valores que el usuario ingresó
            const nombreIngresado = document.getElementById("nombre").value;
            const mailIngresado = document.getElementById("mail").value;

            // Inyectamos esos valores en el HTML del modal
            document.getElementById("modalNombreUsuario").innerText = nombreIngresado;
            document.getElementById("modalMailUsuario").innerText = mailIngresado;

            // Mostramos el modal
            modal.show();

            // Opcional: Limpiamos el formulario después de "enviar"
            formulario.reset();
        });
    });
</script>
</body>
</html>