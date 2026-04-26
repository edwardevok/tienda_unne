<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/paginaenconstruccion.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <title>En Construccion</title>
</head>

<body>
    {{-- NavBar --}}
    @include('partials.navbar')
    {{-- NavBar end --}}

    {{-- Cuerpo --}}

    <div class="maintenance-container">
        <div class="content-box">

            <h1 class="typewriter-title">
                <span class="fixed-text">Tu carrito está </span> <br class="d-md-none">
                <span class="dynamic-text" id="typewriter"></span>
            </h1>

            <img src="{{ asset('img/construccion.png') }}" alt="Carrito en Construcción" class="construction-image">

            <div class="button-container">
                <a href="{{ url('/productos') }}" class="btn-volver">Volver a Productos</a>
            </div>

        </div>
    </div>

    {{-- Footer --}}
    @include('partials.footer')
    {{-- Footer end --}}



    <script>
        // Configuración del efecto Typewriter
        const textElement = document.getElementById('typewriter');
        const phrases = [
            "en construcción 🚧",
            "casi listo 🛠️",
            "tomando forma 📦"
        ];

        let phraseIndex = 0; // Índice de la frase actual
        let charIndex = 0; // Índice del carácter actual
        let isDeleting = false; // Estado: si está borrando o escribiendo
        let typeSpeed = 100; // Velocidad de escritura base

        function type() {
            const currentPhrase = phrases[phraseIndex];

            // Determinar el texto a mostrar basándose en si está escribiendo o borrando
            if (isDeleting) {
                textElement.textContent = currentPhrase.substring(0, charIndex - 1);
                charIndex--;
                typeSpeed = 50; // Velocidad de borrado más rápida
            } else {
                textElement.textContent = currentPhrase.substring(0, charIndex + 1);
                charIndex++;
                typeSpeed = 100; // Velocidad de escritura normal
            }

            // Lógica de cambio de estado (escribir/borrar/siguiente frase)
            if (!isDeleting && charIndex === currentPhrase.length) {
                // Terminó de escribir la frase, esperar antes de borrar
                isDeleting = true;
                typeSpeed = 2000; // Pausa al final de escribir
            } else if (isDeleting && charIndex === 0) {
                // Terminó de borrar, pasar a la siguiente frase
                isDeleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length; // Ciclar las frases
                typeSpeed = 500; // Pausa antes de empezar a escribir la nueva
            }

            setTimeout(type, typeSpeed); // Llamada recursiva con la velocidad calculada
        }

        // Iniciar el efecto cuando cargue la página
        document.addEventListener('DOMContentLoaded', type);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
