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

        <div class="container shadow-none p-3 mt-5 mb-5 bg-body rounded">
            <h2><span class="titulo-login">Datos del titular</span></h2>

            <!-- Primer formulario -->
            <form class="row g-3 container-form" autocomplete="off" id="form1">
                @csrf
                <div class="col-md-3">
                    <label for="nombre" class="form-label">Nombre titular</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre">
                    <span class="badge text-danger errors-nombre"></span>
                </div>
                <div class="col-md-3">
                    <label for="primer" class="form-label">Apellido titular</label>
                    <input type="text" class="form-control" id="primer" name="primer" placeholder="Ingresa el apellido">
                    <span class=" badge text-danger errors-primer"></span>
                </div>
                <div class="col-md-3">
                    <label for="segundo" class="form-label">DNI Titular</label>
                    <input type="number" class="form-control" id="segundo" name="segundo" placeholder="Ingresa el DNI sin puntos">
                    <span class="badge text-danger errors-segundo"></span>
                </div>
                <div class="col-md-3">
                    <label for="segundo" class="form-label">Cuil</label>
                    <input type="number" class="form-control" id="segundo" name="segundo" placeholder="Ingresa el CUIL sin puntos">
                    <span class="badge text-danger errors-segundo"></span>
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="password" name="password" placeholder="Ingresa la fecha de nacimiento">
                    <span  class="badge text-danger errors-password"></span>
                </div>
                <div class="col-md-6">
                    <label  for="confirmarpassword" class="form-label">Nacionalidad</label>
                    <input  type="text" class="form-control" id="confirmarpassword" name="confirmarpassword" placeholder="Ingresa nacionalidad">
                    <span  class="badge text-danger errors-confirmarpassword"></span>
                </div>
                <div class="col-12">
                    <label for="direccion" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="direccion" name="direccion" placeholder="Ingresa tu telefono">
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
                    <label  for="confirmarpassword" class="form-label">Lugar de trabajo</label>
                    <input  type="text" class="form-control" id="confirmarpassword" name="confirmarpassword" placeholder="Lugar de trabajo">
                    <span  class="badge text-danger errors-confirmarpassword"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Remuneracion formal</label>
                    <input type="number" class="form-control" id="postal" name="postal" placeholder="Ingresa tu remuneracion formal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Remuneracion informal</label>
                    <input type="number" class="form-control" id="postal" name="postal" placeholder="Ingresa tu remuneracion informal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Correo electronico</label>
                    <input type="text" class="form-control" id="postal" name="postal" placeholder="Ingresa tu correo electronico">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Confirmacion Correo electronico</label>
                    <input type="text" class="form-control" id="postal" name="postal" placeholder="Confirma tu correo electronico">
                    <span class="badge text-danger errors-postal"></span>
                </div>
    
    
                <div class="alert alert-success" style="display: none;"></div>
                <div class="col-1">
                    <button type="button" id="btn-siguiente-1" class="btn btn-primary">Siguiente</button>
                </div>
            </form>
            
            <!-- Segundo formulario, inicialmente oculto -->
            <div>
            <form class="row g-3 container-form" autocomplete="off" id="form2" style="display: none;">
                @csrf
                <h2><span class="titulo-login">Datos del conyuge</span></h2>
                <div class="col-md-3">
                    <label for="nombre" class="form-label">Nombre conyuge</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre">
                    <span class="badge text-danger errors-nombre"></span>
                </div>
                <div class="col-md-3">
                    <label for="primer" class="form-label">Apellido conyuge</label>
                    <input type="text" class="form-control" id="primer" name="primer" placeholder="Ingresa el primer apellido">
                    <span class=" badge text-danger errors-primer"></span>
                </div>
                <div class="col-md-6">
                    <label for="segundo" class="form-label">DNI conyuge</label>
                    <input type="text" class="form-control" id="segundo" name="segundo" placeholder="Ingresa el segundo apellido">
                    <span class="badge text-danger errors-segundo"></span>
                </div>
                <div class="col-md-3">
                    <label for="segundo" class="form-label">Cuil</label>
                    <input type="text" class="form-control" id="segundo" name="segundo" placeholder="Ingresa el segundo apellido">
                    <span class="badge text-danger errors-segundo"></span>
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Fecha de nacimiento</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa el password">
                    <span  class="badge text-danger errors-password"></span>
                </div>
                <div class="col-md-6">
                    <label  for="confirmarpassword" class="form-label">Nacionalidad</label>
                    <input  type="password" class="form-control" id="confirmarpassword" name="confirmarpassword" placeholder="Confirma el password">
                    <span  class="badge text-danger errors-confirmarpassword"></span>
                </div>
                <div class="col-12">
                    <label for="direccion" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa la direccion">
                    <span class="badge text-danger errors-direccion"></span>
                </div>
                <div class="col-md-6">
                    <label for="rol" class="form-label">Lugar de trabajo</label>
                      <select id="rol" name="rol" class="form-select">
                        <option value="">Selecciona un Rol</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuario</option>
                    </select>
                    <span class="badge text-danger errors-rol"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Remuneracion formal</label>
                    <input type="text" class="form-control" id="postal" name="postal" placeholder="Ingresa un codigo postal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Remuneracion informal</label>
                    <input type="text" class="form-control" id="postal" name="postal" placeholder="Ingresa un codigo postal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Correo electronico</label>
                    <input type="text" class="form-control" id="postal" name="postal" placeholder="Ingresa un codigo postal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Confirmacion Correo electronico</label>
                    <input type="text" class="form-control" id="postal" name="postal" placeholder="Ingresa un codigo postal">
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
        </div>

        <script src="{{asset('js/index.js')}}"></script>
        <script>
            // JavaScript para manejar la transición entre formularios
            document.addEventListener('DOMContentLoaded', function () {
                const form1 = document.getElementById('form1');
                const form2 = document.getElementById('form2');
                const btnSiguiente1 = document.getElementById('btn-siguiente-1');
                const btnSiguiente2 = document.getElementById('btn-siguiente-2');

                // Evento para pasar al segundo formulario
                btnSiguiente1.addEventListener('click', function () {
                    form1.style.display = 'none';
                    form2.style.display = 'block';
                });

                // Evento para volver al primer formulario
                btnSiguiente2.addEventListener('click', function () {
                    form2.style.display = 'none';
                    form1.style.display = 'block';
                });
            });
        </script>
    @endif
@stop
