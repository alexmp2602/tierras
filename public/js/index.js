document.addEventListener("DOMContentLoaded", function () {
    var elementosOcultos = document.querySelectorAll(".oculto");
    var botonLeerMas = document.querySelector(".leer-mas");
    var botonLeerMenos = document.querySelector(".leer-menos");

    // Mostrar "Leer más" si hay elementos ocultos
    if (elementosOcultos.length > 0) {
        botonLeerMas.style.display = "inline";
    }

    // Función para mostrar más detalles
    function mostrarDetalles() {
        elementosOcultos.forEach(function (elemento) {
            elemento.style.display = "list-item";
        });

        // Mostrar "Leer menos" y ocultar "Leer más"
        botonLeerMenos.style.display = "inline";
        botonLeerMas.style.display = "none";
    }

    // Función para ocultar detalles
    function ocultarDetalles() {
        elementosOcultos.forEach(function (elemento) {
            elemento.style.display = "none";
        });

        // Mostrar "Leer más" y ocultar "Leer menos"
        botonLeerMenos.style.display = "none";
        botonLeerMas.style.display = "inline";
    }

    // Función para desplegar contenido al hacer clic en el botón
    var titulo = document.querySelector(".titulo");
    var contenedor = document.querySelector(".contenedor-flex-inscripcion");

    titulo.addEventListener("click", function () {
        contenedor.style.display = contenedor.style.display === "none" ? "block" : "none";
    });

    // Asignar eventos a los botones
    botonLeerMas.addEventListener("click", mostrarDetalles);
    botonLeerMenos.addEventListener("click", ocultarDetalles);
});


ddocument.addEventListener('DOMContentLoaded', function () {
    const form1 = document.getElementById('form1');
    const form2 = document.getElementById('form2');
    const btnSiguiente1 = document.getElementById('btn-siguiente-1');
    const btnSiguiente2 = document.getElementById('btn-siguiente-2');

    const btnEnviar = document.querySelector("#btn-enviar");
    const form = document.querySelector("#form");
    btnEnviar.addEventListener("click", (e) => {
        e.preventDefault();
        const datos = new FormData(form);
        fetch("guardar", {
            method: "post",
            body: datos,
        })
            .then((response) => response.json())
            .then((result) => {
                console.log(result);
                if (result.alerta == "danger") {
                    // Resto del código para mostrar mensajes de error
                }
                if (result.alerta == "success") {
                    const success = document.querySelector(".alert");
                    success.textContent = "El formulario se validó correctamente";
                    success.style.display = "block";
                }
            });
    });
});


