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
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Opciones">Opciones &nbsp;</a>
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
        <p class="subtexto-imagen">Para que más familias puedan tener una vivienda nueva en uno de los predios Procrear
            de todo el país a través del acceso al crédito hipotecario</p>
    </div>

    <!-- Requisitos Section -->
    <div class="contenedor-requisitos">
        <!-- Requisitos Header -->
        <hr class="linea-horizontal">
        <div class="requisitos">
            <p class="texto-requisitos">El objetivo de esta línea es brindar acceso a crédito hipotecario para la compra
                de
                viviendas nuevas en uno de los Desarrollos Urbanísticos de Procrear II.</p>
        </div>

        <!-- Caja Inscripcion Section -->
        <hr class="linea-horizontal">
        <div class="caja-inscripcion">
            <button class="titulo" onclick="desplegarContenido()">
            <i class="fa-regular fa-file-lines fa-3x"></i>
            <h3>Requisitos para el registro</h3>
            <i class="fas fa-chevron-down"></i>
            </button>
            <div class="contenedor-flex-inscripcion">
                <ul>
                    <!-- Lista de requisitos -->
                    <li>
                        No haber resultado beneficiado/a con planes de vivienda en los últimos diez (10) años.
                    </li>
                    <li>
                        No tener, tanto el/la titular, como el/la cotitular, bienes inmuebles registrados a su nombre.
                    </li>
                    <li>
                        Contar con el Documento Nacional de Identidad vigente.
                    </li>
                    <li class="oculto">
                        Ser argentinos/as o extranjeros/as con residencia permanente en el país.
                    </li>
                    <li class="oculto">Tener entre 18 y 64 años al momento de completar la inscripción.</li>
                    <li class="oculto">Acreditar el estado civil declarado en el formulario de inscripción.</li>
                    <li class="oculto">Presentar Certificado de Discapacidad en caso de corresponder.</li>
                    <li class="oculto">Demostrar ingresos netos mensuales del grupo familiar conviviente (tanto el/la
                        solicitante como
                        su
                        cónyuge o pareja conviviente) entre 1 SMVyM y 10 SMVyM. Los ingresos mínimos necesarios para
                        acceder
                        a
                        una determinada vivienda podrán variar según el predio y la tipología seleccionada. De acuerdo a
                        la
                        información declarada en el formulario, se indicará si existen tipologías disponibles.</li>
                    <li class="oculto">Demostrar, como mínimo, doce (12) meses de continuidad laboral registrada.</li>
                    <li class="oculto">No registrar antecedentes negativos en el Sistema Financiero durante los últimos
                        nueve (9)
                        meses.
                    </li>
                    <li class="oculto">Podrán incluir solo un/a cotitular (deberán encontrarse unidos por un vínculo de
                        matrimonio,
                        unión
                        convivencial o unión de hecho). Para el caso de los y las participantes de estado civil
                        casado/a,
                        el/la
                        cónyuge, será considerado cotitular automáticamente.
                    </li>
                </ul>
                <p class="leer-mas">Leer más...</p>
                <p class="leer-menos">Leer menos...</p>
            </div>
        </div>
        <hr class="linea-horizontal">

        <!-- Grid Iconos Section -->
        <div class="grid-iconos">
            <i class="bi bi-geo-alt"></i>
            <i class="bi bi-house"></i>
            <i class="bi bi-calendar"></i>
        </div>

        <!-- Contenedor Botones Section -->
        <div class="contenedor-botones">
            <button>
                <a href="{{ url('pedirdni') }}">Iniciar Registro</a>
            </button>
            <button>
                <a href="{{ url('editarformulario') }}">Editar Formulario</a>
            </button>
        </div>

        <!-- Preguntas Frecuentes Section -->
        <hr class="linea-horizontal">
        <div>
            <br>
            <h2>Preguntas Frecuentes</h2>
            <br>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            ¿Cómo puedo registrarme?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Para registrarte, debes hacer clic en el botón "Iniciar Registro" y seguir las instrucciones
                            en
                            pantalla.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Cómo puedo editar mi formulario?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Para editar tu formulario, debes hacer clic en el botón "Editar formulario" y realizar los
                            cambios que desees.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Qué hago si olvidé mi contraseña?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Si olvidaste tu contraseña, debes hacer clic en el enlace "Olvidé mi contraseña" en la
                            página de
                            inicio de sesión y seguir las instrucciones para restablecerla.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            ¿Cómo puedo cambiar mi dirección de correo electrónico?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Si olvidaste tu contraseña, debes hacer clic en el enlace "Olvidé mi contraseña" en la
                            página de
                            inicio de sesión y seguir las instrucciones para restablecerla.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            ¿Cómo puedo eliminar mi cuenta?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Para eliminar tu cuenta, debes ir a la sección de configuración de tu perfil y seleccionar
                            la
                            opción "Eliminar cuenta".
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            ¿Cómo puedo recuperar mi cuenta eliminada?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Para eliminar tu cuenta, debes ir a la sección de configuración de tu perfil y seleccionar
                            la
                            opción "Eliminar cuenta".
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            ¿Cómo puedo cambiar mi nombre de usuario?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Para cambiar tu nombre de usuario, debes ir a la sección de configuración de tu perfil y
                            actualizar tu nombre de usuario.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
@stop