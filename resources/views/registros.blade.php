@extends('base')
@section('contenido')
    @if (count($registros))
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo-sistemas2.png" alt="Logo Municipalidad">
            </a>

            <div style="display: flex; gap: 20px;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="opcionesDropdown">
                            <a class="dropdown-item" href="index.php"><i class="fas fa-dollar"></i> Ordenes de pago</a>
                            <a class="dropdown-item" href="index2.php"><i class="fas fa-tasks"></i> Compromisos</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="usuarioDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="usuarioDropdown">
                            <a class="dropdown-item" href="php/cambiar-contrasena.php"><i class="fas fa-lock"></i>
                                Cambiar Contraseña</a>
                            <a class="dropdown-item" href="php/cerrar-sesion.php"><i class="fas fa-sign-out-alt"></i>
                                Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container shadow-none mt-5 mb-5 bg-body rounded">
            <!-- Primer formulario -->
            <form class="row g-3 container-form" autocomplete="off" id="form1">
                <h2 id="titulo-form1"><span class="titulo-login">Datos del titular</span></h2>
                @csrf
                <div class="col-md-3">
                    <label for="nombre" class="form-label">Nombre titular</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"
                        placeholder="Ingresa el nombre">
                    <span class="badge text-danger errors-nombre"></span>
                </div>
                <div class="col-md-3">
                    <label for="primer" class="form-label">Apellido titular</label>
                    <input type="text" class="form-control" id="primer" name="primer"
                        placeholder="Ingresa el apellido">
                    <span class=" badge text-danger errors-primer"></span>
                </div>
                <div class="col-md-3">
                    <label for="segundo" class="form-label">DNI Titular</label>
                    <input type="number" class="form-control" id="segundo" name="segundo"
                        placeholder="Ingresa el DNI sin puntos">
                    <span class="badge text-danger errors-segundo"></span>
                </div>
                <div class="col-md-3">
                    <label for="segundo" class="form-label">Cuil</label>
                    <input type="number" class="form-control" id="segundo" name="segundo"
                        placeholder="Ingresa el CUIL sin puntos">
                    <span class="badge text-danger errors-segundo"></span>
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="password" name="password"
                        placeholder="Ingresa la fecha de nacimiento">
                    <span class="badge text-danger errors-password"></span>
                </div>
                <div class="col-md-6">
                    <label for="confirmarpassword" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="confirmarpassword" name="confirmarpassword"
                        placeholder="Ingresa nacionalidad">
                    <span class="badge text-danger errors-confirmarpassword"></span>
                </div>
                <div class="col-12">
                    <label for="direccion" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="direccion" name="direccion"
                        placeholder="Ingresa tu telefono">
                    <span class="badge text-danger errors-direccion"></span>
                </div>
                <div class="col-md-6">
                    <label for="rol" class="form-label">Estado civil</label>
                    <select id="rol" name="rol" class="form-select">
                        <option value="">Soltero</option>
                        <option value="Administrador">Casado</option>
                        <option value="Usuario">Union convivencial</option>
                    </select>
                    <span class="badge text-danger errors-rol"></span>
                </div>
                <div class="col-md-6">
                    <label for="confirmarpassword" class="form-label">Lugar de trabajo</label>
                    <input type="text" class="form-control" id="confirmarpassword" name="confirmarpassword"
                        placeholder="Lugar de trabajo">
                    <span class="badge text-danger errors-confirmarpassword"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Remuneracion formal</label>
                    <input type="number" class="form-control" id="postal" name="postal"
                        placeholder="Ingresa tu remuneracion formal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Remuneracion informal</label>
                    <input type="number" class="form-control" id="postal" name="postal"
                        placeholder="Ingresa tu remuneracion informal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Correo electronico</label>
                    <input type="text" class="form-control" id="postal" name="postal"
                        placeholder="Ingresa tu correo electronico">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Confirmacion Correo electronico</label>
                    <input type="text" class="form-control" id="postal" name="postal"
                        placeholder="Confirma tu correo electronico">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="alert alert-success" style="display: none;"></div>
                <div class="col-1">
                    <button type="button" id="btn-siguiente-1" class="btn btn-primary">Siguiente</button>
                </div>
            </form>
        </div>
        <!-- Segundo formulario, inicialmente oculto -->
        <div class="container shadow-none mt-5 mb-5 bg-body rounded">
            <form class="row g-3 container-form" autocomplete="off" id="form2" style="display: none;">
                <h2 id="titulo-form2"><span class="titulo-login">Datos del conyuge</span></h2>
                <div class="col-md-3">
                    <label for="nombre" class="form-label">Nombre conyuge</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"
                        placeholder="Ingresa el nombre">
                    <span class="badge text-danger errors-nombre"></span>
                </div>
                <div class="col-md-3">
                    <label for="primer" class="form-label">Apellido conyuge</label>
                    <input type="text" class="form-control" id="primer" name="primer"
                        placeholder="Ingresa el apellido">
                    <span class=" badge text-danger errors-primer"></span>
                </div>
                <div class="col-md-3">
                    <label for="segundo" class="form-label">DNI conyuge</label>
                    <input type="number" class="form-control" id="segundo" name="segundo"
                        placeholder="Ingresa el DNI sin puntos">
                    <span class="badge text-danger errors-segundo"></span>
                </div>
                <div class="col-md-3">
                    <label for="segundo" class="form-label">Cuil conyuge</label>
                    <input type="number" class="form-control" id="segundo" name="segundo"
                        placeholder="Ingresa el CUIL sin puntos">
                    <span class="badge text-danger errors-segundo"></span>
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Fecha de nacimiento conyuge</label>
                    <input type="date" class="form-control" id="password" name="password"
                        placeholder="Ingresa la fecha de nacimiento">
                    <span class="badge text-danger errors-password"></span>
                </div>
                <div class="col-md-6">
                    <label for="confirmarpassword" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="confirmarpassword" name="confirmarpassword"
                        placeholder="Ingresa nacionalidad">
                    <span class="badge text-danger errors-confirmarpassword"></span>
                </div>
                <div class="col-12">
                    <label for="direccion" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="direccion" name="direccion"
                        placeholder="Ingresa tu telefono">
                    <span class="badge text-danger errors-direccion"></span>
                </div>
                <div class="col-md-6">
                    <label for="confirmarpassword" class="form-label">Lugar de trabajo</label>
                    <input type="text" class="form-control" id="confirmarpassword" name="confirmarpassword"
                        placeholder="Lugar de trabajo">
                    <span class="badge text-danger errors-confirmarpassword"></span>
                </div>
                <div class="col-md-6">
                    <label for="postal" class="form-label">Remuneracion formal</label>
                    <input type="number" class="form-control" id="postal" name="postal"
                        placeholder="Ingresa tu remuneracion formal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-4">
                    <label for="postal" class="form-label">Remuneracion informal</label>
                    <input type="number" class="form-control" id="postal" name="postal"
                        placeholder="Ingresa tu remuneracion informal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-4">
                    <label for="postal" class="form-label">Correo electronico</label>
                    <input type="text" class="form-control" id="postal" name="postal"
                        placeholder="Ingresa tu correo electronico">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-4">
                    <label for="postal" class="form-label">Confirmacion Correo electronico</label>
                    <input type="text" class="form-control" id="postal" name="postal"
                        placeholder="Confirma tu correo electronico">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="alert alert-success" style="display: none;"></div>
                <div class="col-1">
                    <a href="{{ url('/') }}" type="text" class="btn btn-primary">Volver</a>
                </div>
                <div class="col-1">
                    <button type="button" id="btn-siguiente-2" class="btn btn-primary">Siguiente</button>
                </div>
            </form>
        </div>
        <!-- Tercer formulario, inicialmente oculto -->
<!-- Tercer formulario, inicialmente oculto -->

<div class="container shadow-none mt-5 mb-5 bg-body rounded">
    <form class="row g-3 container-form" autocomplete="off" id="form3" style="display: none;">
        <h2 id="titulo-form3"><span class="titulo-login">Domicilio y datos adicionales</span></h2>
        <div class="col-md-6">
            <label for="calle" class="form-label">Calle</label>
            <input type="text" class="form-control" id="calle" name="calle" placeholder="Ingresa la direccion">
            <span class="badge text-danger errors-calle"></span>
        </div>
        <div class="col-md-2">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
            <span class="badge text-danger errors-numero"></span>
        </div>
        <div class="col-md-4">
            <label for="entre_calles" class="form-label">Entre calles</label>
            <input type="text" class="form-control" id="entre_calles" name="entre_calles" placeholder="Entre calles">
            <span class="badge text-danger errors-entre_calles"></span>
        </div>
        <div class="col-md-3">
            <label for="piso" class="form-label">Piso</label>
            <input type="text" class="form-control" id="piso" name="piso" placeholder="Piso">
            <span class="badge text-danger errors-piso"></span>
        </div>
        <div class="col-md-3">
            <label for="departamento" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento">
            <span class="badge text-danger errors-departamento"></span>
        </div>
        <div class="col-md-6">
            <label for="barrio" class="form-label">Barrio</label>
            <input type="text" class="form-control" id="barrio" name="barrio" placeholder="Ingresa el barrio">
            <span class="badge text-danger errors-barrio"></span>
        </div>
        <div class="col-md-3">
            <label for="domicilio_alternativo" class="form-label">Domicilio Alternativo</label>
            <input type="text" class="form-control" id="domicilio_alternativo" name="domicilio_alternativo" placeholder="Ingresa el domicilio familiar o laboral">
            <span class="badge text-danger errors-domicilio_alternativo"></span>
        </div>
        <div class="col-md-3">
            <label for="situacion_habitacional" class="form-label">Situación Habitacional</label>
            <select id="situacion_habitacional" name="situacion_habitacional" class="form-select">
                <option value="">Selecciona una opción</option>
                <option value="Propietario">Propietario</option>
                <option value="Inquilino">Inquilino</option>
                <option value="Otro">Otro</option>
            </select>
            <span class="badge text-danger errors-situacion_habitacional"></span>
        </div>
        <div class="col-md-3">
            <label for="cantidad_hijos" class="form-label">Cantidad de Hijos</label>
            <input type="number" class="form-control" id="cantidad_hijos" name="cantidad_hijos" placeholder="Cantidad">
            <span class="badge text-danger errors-cantidad_hijos"></span>
        </div>
        <div class="alert alert-success" style="display: none;"></div>
        <div class="col-12 d-flex justify-content-start gap-4">
            <a href="{{ url('/') }}" type="text" class="btn btn-primary mr-2">Volver</a>
            <button type="button" id="btn-siguiente-3" class="btn btn-primary">Siguiente</button>
        </div>

    </form>
</div>


<!-- Cuarto formulario, inicialmente oculto -->
<div class="container shadow-none mt-5 mb-5 bg-body rounded">
    <form class="row g-3 container-form" autocomplete="off" id="form4" style="display: none;">
        <h2 id="titulo-form4"><span class="titulo-login">Datos adicionales</span></h2>
        <div class="col-md-2">
            <label for="cantidad_hijos" class="form-label">Grupo</label>
            <input type="number" class="form-control" id="cantidad_hijos" name="cantidad_hijos" placeholder="Cantidad">
            <span class="badge text-danger errors-cantidad_hijos"></span>
        </div>
        <div class="col-md-10" id="info_hijos_container">
            <!-- Contenedor dinámico para la información de los hijos -->
        </div>
        <!-- Campo para adjuntar archivos -->
        <div class="col-md-12">
            <label for="archivo" class="form-label">Adjuntar archivo</label>
            <input type="file" class="form-control" id="archivo" name="archivo">
        </div>
        <div class="alert alert-success" style="display: none;"></div>
        <div class="col-1">
            <a href="{{ url('/') }}" type="text" class="btn btn-primary">Volver</a>
        </div>
        <div class="col-1">
            <button type="button" id="btn-siguiente-4" class="btn btn-primary">Siguiente</button>
        </div>
    </form>
</div>



        <script src="{{ asset('js/index.js') }}"></script>
        <script>
            // JavaScript para manejar la transición entre formularios
            document.addEventListener('DOMContentLoaded', function () {
                const form1 = document.getElementById('form1');
                const form2 = document.getElementById('form2');
                const form3 = document.getElementById('form3');
                const form4 = document.getElementById('form4');
                const btnSiguiente1 = document.getElementById('btn-siguiente-1');
                const btnSiguiente2 = document.getElementById('btn-siguiente-2');
                const btnSiguiente3 = document.getElementById('btn-siguiente-3');
                const btnSiguiente4 = document.getElementById('btn-siguiente-4');
        
                // Evento para pasar al segundo formulario
                btnSiguiente1.addEventListener('click', function () {
                    form1.style.display = 'none';
                    form2.style.display = 'flex';
                });
        
                // Evento para pasar al tercer formulario
                btnSiguiente2.addEventListener('click', function () {
                    form2.style.display = 'none';
                    form3.style.display = 'flex';
                });
        
                // Evento para pasar al cuarto formulario
                btnSiguiente3.addEventListener('click', function () {
                    form3.style.display = 'none';
                    form4.style.display = 'flex';
                });
        
                // Evento para volver al tercer formulario
                btnSiguiente4.addEventListener('click', function () {
                    form4.style.display = 'none';
                    form3.style.display = 'flex';
                });
            });
        </script>
        
        <script>
            document.getElementById('cantidad_hijos').addEventListener('change', function() {
                var cantidadHijos = this.value;
                var container = document.getElementById('info_hijos_container');
                container.innerHTML = ''; // Limpiar el contenedor
        
                for (var i = 1; i <= cantidadHijos; i++) {
                    var childDiv = document.createElement('div');
                    childDiv.classList.add('mb-3');
                    childDiv.innerHTML = `
                        <h3>Hijo ${i}</h3>
                        <div class="col-md-4">
                            <label for="nombre_hijo_${i}" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre_hijo_${i}" name="nombre_hijo_${i}" placeholder="Nombre">
                        </div>
                        <div class="col-md-4">
                            <label for="apellido_hijo_${i}" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido_hijo_${i}" name="apellido_hijo_${i}" placeholder="Apellido">
                        </div>
                        <div class="col-md-4">
                            <label for="dni_hijo_${i}" class="form-label">DNI</label>
                            <input type="text" class="form-control" id="dni_hijo_${i}" name="dni_hijo_${i}" placeholder="DNI">
                        </div>
                        <div class="col-md-4">
                            <label for="fecha_nacimiento_hijo_${i}" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento_hijo_${i}" name="fecha_nacimiento_hijo_${i}">
                        </div>
                        <div class="col-md-4">
                            <label for="discapacidad_hijo_${i}" class="form-label">¿Tiene discapacidad?</label>
                            <select id="discapacidad_hijo_${i}" name="discapacidad_hijo_${i}" class="form-select">
                                <option value="">Selecciona una opción</option>
                                <option value="Si">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    `;
                    container.appendChild(childDiv);
                }
            });
        </script>
        
    @endif
@stop
