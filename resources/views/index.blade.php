@extends('base')
@section('contenido')

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo-sistemas2.png') }}" alt="Logo Municipalidad">
        </a>
        <div style="display: flex; flex-direction:row; gap: 20px;">
            <!-- Dropdown Menu  -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="usuarioDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        aria-label="Opciones">Opciones &nbsp;</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="usuarioDropdown">
                        <a class="dropdown-item" href="php/cambiar-contrasena.php"><i class="fas fa-lock"></i>Cambiar
                            Contraseña</a>
                        <a class="dropdown-item" href="php/cerrar-sesion.php"><i class="fas fa-sign-out-alt"></i>Cerrar
                            Sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Header Section -->
    <div class="imagen-ciudad" src="{{ asset('assets/img/ciudad.jpg') }}" alt="">
        <p class="texto-imagen">Sistema de Registro Habitacional</p>
        <br>
        <p class="subtexto-imagen">Para que más familias puedan tener una vivienda nueva en uno de los predios Procrear
            de todo el país a través del acceso al crédito hipotecario</p>
    </div>

    <!-- Requisitos Section -->
    <div class="contenedor-requisitos">
        <!-- Requisitos Header -->
        <hr class="linea-horizontal">
        <div class="info-requisitos">
            <p class="texto-requisitos">El objetivo de esta línea es brindar acceso a crédito hipotecario para la compra
                de
                viviendas nuevas en uno de los Desarrollos Urbanísticos de Procrear II.</p>
        </div>

        <!-- Caja Requisitos Section -->
        <hr class="linea-horizontal">

        <div style="display:flex; justify-content:center">
            <div class="contenedor-desplegar-requisitos">
                <button class="desplegar-requisitos" id="desplegar-requisitos">
                    <h3 style="margin-bottom: 0"><i class="fa-regular fa-file-lines fa-3x"
                            style="font-size: 1em; padding-right:10px"></i>Requisitos para el registro
                        <i class="fas fa-chevron-down"></i>
                    </h3>
                </button>
                <div class="requisitos">
                    <ul style="text-align:start">
                        <!-- Lista de requisitos -->
                        <li>
                            No poseer bienes inmuebles propios
                        </li>
                        <li>
                            No ser beneficiarios de planes de viviendas oficiales
                        </li>
                        <li>
                            No poseer créditos hipotecarios (compra, ampliación o refacción de vivienda)
                        </li>
                        <li>
                            Tener 5 años de residencia en la ciudad de Mercedes continuos e inmediatos
                        </li>
                        <li>
                            No participar ni haber participado de usurpaciones
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="linea-horizontal">

        <div style="display:flex; flex-direction:column; align-items:center">

            <!-- Iniciar Registro Section -->

            <div class="iniciar-registro">
                <div class="container-img-index">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icono-svg-index"
                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path
                            d="M288 48c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48V192h40V120c0-13.3 10.7-24 24-24s24 10.7 24 24v72h24c26.5 0 48 21.5 48 48V464c0 26.5-21.5 48-48 48H432 336c-26.5 0-48-21.5-48-48V48zm64 32v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zm16 80c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H368zM352 272v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zm176-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H528zM512 368v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H528c-8.8 0-16 7.2-16 16zM224 160c0 6-1 11-2 16c20 14 34 38 34 64c0 45-36 80-80 80H160V480c0 18-15 32-32 32c-18 0-32-14-32-32V320H80c-45 0-80-35-80-80c0-26 13-50 33-64c-1-5-1-10-1-16c0-53 42-96 96-96c53 0 96 43 96 96z" />
                    </svg>
                </div>
                <div class="container-registro">
                    <h1>Programa Mi Terreno</h1>
                    <span>Solo necesitamos algunos datos para iniciar el proceso de solicitud.</span>
                    <a href="{{ url('pedirdni') }}" role="button">Ir a Registros</a>
                </div>
            </div>

        </div>


        <!-- Preguntas Frecuentes Section -->
        <hr class="linea-horizontal">
        <div>
            <br>
            <h2>Preguntas Frecuentes</h2>
            <br>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThirteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                            ¿Qué documentación debo presentar?
                        </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            • Fotocopia de DNI de todo el grupo familiar con quien se irían a vivir <br>
                            • Fotocopia de CUIL de adultos <br>
                            • Fotocopia de recibo de haberes, pensión o jubilación, o constancia monotributo (según
                            corresponda) <br>
                            • Fotocopia de contrato de alquiler en caso de estar alquilando una vivienda para uso
                            familiar <br>
                            • Fotocopia de certificado de nacimiento de hijos menores de 21 años <br>
                            • Fotocopia de certificado de matrimonio en caso de parejas casadas legalmente <br>
                            (fotocopia de sentencia de divorcio en caso de divorciados)
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            ¿Se pueden anotar personas que no vivan en Mercedes?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            No. El programa está destinado a solucionar la demanda habitacional de Mercedes,
                            haber nacido en la ciudad no es suficiente para poder inscribirse si no tiene el
                            domicilio real y no vive en ella. Lo mismo aplica para aquellos que en su DNI se
                            registran en otra localidad.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Me puedo inscribir si no tengo recibo de sueldo en blanco?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Si. Todos tienen la posibilidad de acceder al Programa para adquirir su lote. En caso
                            que alguien no cumpla con el pago del beneficio obtenido, se llevarán las acciones
                            legales pertinentes conforme lo establezca el boleto de compraventa de cada
                            inmueble.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Aceptan a personas sin hijos?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Si. La familia unilateral es aceptada para poder ingresar a formar parte del registro de
                            demanda habitacional.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Si tengo un nuevo integrante en mi familia, ¿lo debo incorporar?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Si, agregando la documentación requerida.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            ¿Puedo inscribirme con mis padres?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Si. Si no son propietarios de ningún inmueble y cumplen con los requisitos.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Si tengo un terreno no edificado, ¿Me puedo inscribir?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            No. Para acceder al Programa no debe ejercer posesión de ningún inmueble.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Si tengo un terreno que no está escriturado, pero del que soy poseedor, ¿Me puedo
                            inscribir?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            No. Consideramos resuelta la problemática habitacional. Sugerimos acercarse a la
                            Dirección de Viviendas para acceder a algún programa disponible.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Si estoy viviendo en un lote usurpado, ¿Puedo participar de los sorteos del programa?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            No. El Decreto N° 1777, Folio N° 1998 del Libro N° 53 dispone que no deben haber
                            participado de ninguna acción que configure principio de ejecución del delito previsto
                            en el art. 181 inc. 1 o 2 del Código Penal.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Si estoy casado y me separé, ¿tengo que presentar algo?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Si. Deben presentar el divorcio cuando le obtengan, porque deben tener en cuenta que
                            si saliesen sorteados y se encuentran legalmente casados les correspondería el
                            inmueble en un 50% para cada uno. Además, una de las condiciones para poder
                            acceder al lote es que se vayan a vivir el grupo familiar denunciado en la Declaración
                            Jurada al momento de la inscripción.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            ¿Qué pasa si mis padres escrituraron una casa a mi favor con un usufructo vitalicio?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Dependiendo el caso se evaluará la situación.-
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            ¿Me puedo anotar si tengo un inmueble inscripto a mi favor compartido con otras
                            personas sin tener resuelta mi problemática habitacional?
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Dependiendo el caso se evaluará la situación.-
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
@stop