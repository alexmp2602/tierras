// script.js

document.addEventListener('DOMContentLoaded', function () {
    var elementosOcultos = document.querySelectorAll('.oculto');
    var botonLeerMas = document.querySelector('.leer-mas');
    var botonLeerMenos = document.querySelector('.leer-menos');

    // Mostrar "Leer más" si hay elementos ocultos
    if (elementosOcultos.length > 0) {
        botonLeerMas.style.display = 'inline';
    }

    // Función para mostrar más detalles
    function mostrarDetalles() {
        elementosOcultos.forEach(function (elemento) {
            elemento.style.display = 'list-item';
        });

        // Mostrar "Leer menos" y ocultar "Leer más"
        botonLeerMenos.style.display = 'inline';
        botonLeerMas.style.display = 'none';
    }

    // Función para ocultar detalles
    function ocultarDetalles() {
        elementosOcultos.forEach(function (elemento) {
            elemento.style.display = 'none';
        });

        // Mostrar "Leer más" y ocultar "Leer menos"
        botonLeerMenos.style.display = 'none';
        botonLeerMas.style.display = 'inline';
    }

    // Asignar eventos a los botones
    botonLeerMas.addEventListener('click', mostrarDetalles);
    botonLeerMenos.addEventListener('click', ocultarDetalles);
});
