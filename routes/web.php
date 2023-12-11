<?php

use Illuminate\Support\Facades\Route;

/* Rutas visibles para ir y volver */

Route::get('/', function () {
    return view('index');
});

Route::get('pedirdni', function () {
    return view('pedirdni');
});

Route::get('previo', function (Request $request) {

    $temporal = DB::table('terr_inscriptos_temp')
        ->where('dni', session()->get('sesion_data.dni'))
        ->where('sesion', session()->get('sesion_data.sesion'))
        ->select('*')
        ->get()->first();
    return view('previo', compact('temporal'));
});
Route::get('pedircorreo', function () {
    $temporal = DB::table('terr_inscriptos_temp')
        ->where('dni', session()->get('sesion_data.dni'))
        ->where('sesion', session()->get('sesion_data.sesion'))
        ->select('*')
        ->get()->first();
    return view('pedircorreo', compact('temporal'));
});
Route::get('pedirnombre', function () {
    $temporal = DB::table('terr_inscriptos_temp')
        ->where('dni', session()->get('sesion_data.dni'))
        ->where('sesion', session()->get('sesion_data.sesion'))
        ->select('*')
        ->get()->first();
    return view('pedirnombre', compact('temporal'));
});
Route::get('pedircuil', function () {
    $temporal = DB::table('terr_inscriptos_temp')
        ->where('dni', session()->get('sesion_data.dni'))
        ->where('sesion', session()->get('sesion_data.sesion'))
        ->select('*')
        ->get()->first();
    return view('pedircuil', compact('temporal'));
});
Route::get('pedirfechanacimiento', function () {
    $temporal = DB::table('terr_inscriptos_temp')
    ->where('dni', session()->get('sesion_data.dni'))
    ->where('sesion', session()->get('sesion_data.sesion'))
    ->select('*')
    ->get()->first();
    return view('pedirfechanacimiento', compact('temporal'));
});
Route::get('pedirfechanacimiento', function () {
    return view('pedirfechanacimiento');
});
Route::get('pedirnacionalidad', function () {
    return view('pedirnacionalidad');
});
Route::get('pedirtelefono', function () {
    return view('pedirtelefono');
});
Route::get('pedirestadocivil', function () {
    return view('pedirestadocivil');
});
Route::get('pedirdiscapacidad', function () {
    return view('pedirdiscapacidad');
});
Route::get('pedirlugartrabajo', function () {
    return view('pedirlugartrabajo');
});
Route::get('pedirdomicilio', function () {
    return view('pedirdomicilio');
});
Route::get('pedirdomicilioalternativo', function () {
    return view('pedirdomicilioalternativo');
});
Route::get('pedirsituacionhabitacional', function () {
    return view('pedirsituacionhabitacional');
});
Route::get('pedirconyuge', function () {
    return view('pedirconyuge');
});
Route::get('pedirnombreconyuge', function () {
    return view('pedirnombreconyuge');
});
Route::get('pedirdniconyuge', function () {
    return view('pedirdniconyuge');
});
Route::get('pedircuilconyuge', function () {
    return view('pedircuilconyuge');
});
Route::get('pedirfechanacimientoconyuge', function () {
    return view('pedirfechanacimientoconyuge');
});
Route::get('pedirnacionalidadconyuge', function () {
    return view('pedirnacionalidadconyuge');
});
Route::get('pedirtelefonoconyuge', function () {
    return view('pedirtelefonoconyuge');
});
Route::get('pedirdiscapacidadconyuge', function () {
    return view('pedirdiscapacidadconyuge');
});
Route::get('pedirlugartrabajoconyuge', function () {
    return view('pedirlugartrabajoconyuge');
});
Route::get('pedircorreoconyuge', function () {
    return view('pedircorreoconyuge');
});
Route::get('pedircantidadhijos', function () {
    return view('pedircantidadhijos');
});
Route::get('pedirgrupofamiliar', function () {
    return view('pedirgrupofamiliar');
});
Route::get('finalizar', function () {
    return view('finalizar');
});



/* Rutas para validar datos del lado del servidor */

Route::post('validardni', 'Web@validarDni');

Route::post('validarprevio', 'Web@validarPrevio');

Route::post('validarcorreo', 'Web@validarCorreo');

Route::post('validarnombre', 'Web@validarNombre');

Route::post('validarcuil', 'Web@validarCuil');

Route::post('validarfechanacimiento', 'Web@validarFechaNacimiento');

Route::post('validarnacionalidad', 'Web@validarNacionalidad');

Route::post('validartelefono', 'Web@validarTelefono');

Route::post('validarestadocivil', 'Web@validarEstadoCivil');

Route::post('validardiscapacidad', 'Web@validarDiscapacidad');

Route::post('validarlugartrabajo', 'Web@validarLugarTrabajo');

Route::post('validardomicilio', 'Web@validarDomicilio');

Route::post('validardomicilioalternativo', 'Web@validarDomicilioAlternativo');

Route::post('validarsituacionhabitacional', 'Web@validarSituacionHabitacional');

Route::post('validarconyuge', 'Web@validarConyuge');

Route::post('validarnombreconyuge', 'Web@validarNombreConyuge');

Route::post('validardniconyuge', 'Web@validarDniConyuge');

Route::post('validarcuilconyuge', 'Web@validarCuilConyuge');

Route::post('validarfechanacimientoconyuge', 'Web@validarFechaNacimientoConyuge');

Route::post('validarnacionalidadconyuge', 'Web@validarNacionalidadConyuge');

Route::post('validartelefonoconyuge', 'Web@validarTelefonoConyuge');

Route::post('validardiscapacidadconyuge', 'Web@validarDiscapacidadConyuge');

Route::post('validarlugartrabajoconyuge', 'Web@validarLugarTrabajoConyuge');

Route::post('validarcorreoconyuge', 'Web@validarCorreoConyuge');

Route::post('validarcantidadhijos', 'Web@validarCantidadHijos');

Route::post('validargrupofamiliar', 'Web@validarGrupoFamiliar');
