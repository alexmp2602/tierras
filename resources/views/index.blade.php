@extends('base')
@section('contenido')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ordenes de Pago</title>
    <link rel="icon" href="assets/img/logo-sistemas.ico">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<nav class="navbar navbar-light">
    <a class="navbar-brand" href="#">
        <img src="assets/img/logo-sistemas2.png" alt="Logo Municipalidad">
    </a>
    <div style="display: flex; gap: 20px;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="opcionesDropdown">
                        <a class="dropdown-item" href="index.php"><i class="fas fa-dollar"></i>
                            Ordenes de pago</a>
                        <a class="dropdown-item" href="index2.php"><i class="fas fa-tasks"></i>Compromisos</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="usuarioDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    </a>
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
<div class="imagen-ciudad" src="{{ asset('assets/img/ciudad.jpg') }}" alt="">
    <p class="texto-imagen">Sistema de Registro Habitacional</p>
    <p class="subtexto-imagen">Para que más familias puedan tener una vivienda nueva en uno de los predios Procrear de
        todo el país a través del
        acceso al crédito hipotecario</p>
</div>
<div class="contenedor-requisitos">
    <hr class="linea-horizontal">
    <div class="requisitos">
        <p class="texto-requisitos">El objetivo de esta línea es brindar acceso a crédito hipotecario para la compra de
            viviendas nuevas
            en
            uno de los Desarrollos Urbanísticos de Procrear II.
        </p>
    </div>
    <hr class="linea-horizontal">
    <div class="caja-inscripcion">
        <i class="fa-regular fa-file-lines fa-5x"></i>
        <div class="contenedor-flex-inscripcion">
            <h3>Requisitos para el registro</h3>
            <li>
                No haber resultado beneficiado/a con planes de vivienda en los últimos diez (10) años.
            </li>
            <li>
                No tener, tanto el/la titular, como el/la cotitular, bienes inmuebles registrados a su nombre.
            </li>
            <li>
                Contar con el Documento Nacional de Identidad vigente.
            </li>
            <li>
                Ser argentinos/as o extranjeros/as con residencia permanente en el país.
            </li>
            <li>Tener entre 18 y 64 años al momento de completar la inscripción.</li>
            <li>Acreditar el estado civil declarado en el formulario de inscripción.</li>
            <li>Presentar Certificado de Discapacidad en caso de corresponder.</li>
            <li>Demostrar ingresos netos mensuales del grupo familiar conviviente –tanto el/la solicitante como su
                cónyuge o pareja conviviente– entre 1 SMVyM y 10 SMVyM. Los ingresos mínimos necesarios para acceder a
                una determinada vivienda podrán variar según el predio y la tipología seleccionada. De acuerdo a la
                información declarada en el formulario, se indicará si existen tipologías disponibles.</li>
            <li>Demostrar, como mínimo, doce (12) meses de continuidad laboral registrada.</li>
            <li>No registrar antecedentes negativos en el Sistema Financiero durante los últimos nueve (9) meses.</li>
            <li>Podrán incluir solo un/a cotitular (deberán encontrarse unidos por un vínculo de matrimonio, unión
                convivencial o unión de hecho). Para el caso de los y las participantes de estado civil casado/a, el/la
                cónyuge, será considerado cotitular automáticamente.</li>
        </div>
    </div>
    <hr class="linea-horizontal">
    <div class="grid-iconos">
        <i class="bi bi-geo-alt"></i>
        <i class="bi bi-house"></i>
        <i class="bi bi-calendar"></i>
    </div>
    <div class="contenedor-botones">
        <button>
            <a href="{{ url('verregistros') }}">Registros</a>
        </button>
        <button>
            <a href="">Editar formulario</a>
        </button>
    </div>
    <hr class="linea-horizontal">
    <div>
        <br><br>
        <h2>Preguntas Frecuentes</h2>
        <br>
        <p>
            <b>¿Cuáles son los requisitos para inscribirse?</b>
            <hr class="linea-horizontal">
            <br>
            <br>
            <b>¿Cuáles son los requisitos para inscribirse?</b>
            <br>
            <br>
            <b>¿Cuáles son los requisitos para inscribirse?</b>
            <br>
            <br>
            <b>¿Cuáles son los requisitos para inscribirse?</b>
            <br>
            <br>
            <b>¿Cuáles son los requisitos para inscribirse?</b>
            <br>
            <br>
            <b>¿Cuáles son los requisitos para inscribirse?</b>
            <br>
            <br>
            <b>¿Cuáles son los requisitos para inscribirse?</b>
            <br>
            <br>
            <b>¿Cuáles son los requisitos para inscribirse?</b>
            <br>
            <br>
        </p>
    </div>
</div>

<!-- Bootstrap-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<!-- FontAwesome-->

<script src="https://kit.fontawesome.com/0c5da2f650.js" crossorigin="anonymous"></script>
@stop