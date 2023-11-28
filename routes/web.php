<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('privada', function () {
    return view('login.login');
});
Route::get('pedirdni', function () {
    return view('pedirdni');
});


Route::get('verregistros', 'Web@verregistros');

Route::post('buscardni', 'Web@buscardni');

Route::get('editarformulario', function () {
    return view('pedirdni1');
});
Route::post('editarformulario', 'Web@editarformulario');

Route::post('control', 'Web@control');