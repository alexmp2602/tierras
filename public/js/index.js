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

    // Asignar eventos a los botones
    botonLeerMas.addEventListener("click", mostrarDetalles);
    botonLeerMenos.addEventListener("click", ocultarDetalles);
});


document.addEventListener('DOMContentLoaded', function () {
    const form1 = document.getElementById('form1');
    const form2 = document.getElementById('form2');
    const btnSiguiente1 = document.getElementById('btn-siguiente-1');
    const btnSiguiente2 = document.getElementById('btn-siguiente-2');
    const tituloForm1 = document.querySelector('#form1 h2 .titulo-login');
    const tituloForm2 = document.querySelector('#form2 h2 .titulo-login');

    // Evento para pasar al segundo formulario
    btnSiguiente1.addEventListener('click', function () {
        form1.style.display = 'none';
        form2.style.display = 'block';
        tituloForm1.style.display = 'none';
        tituloForm2.style.display = 'block';
    });

    // Evento para volver al primer formulario
    btnSiguiente2.addEventListener('click', function () {
        form2.style.display = 'none';
        form1.style.display = 'block';
        tituloForm1.style.display = 'block';
        tituloForm2.style.display = 'none';
    });

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

