<?php

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
    return view('welcome');
});

Route::get('/principal', function () {
    return view('principal/contenido');
});

Route::get('/usuarios', function () {
    return view('/usuarios');
});

Route::get('/agregar_usuarios', function () {
    return view('/agregar_usuarios');
});

Route::get('/editar_usuarios', function () {
    return view('/editar_usuarios');
});

Route::get('/personas', function () {
    return view('/personas');
});

Route::get('/agregar_personas', function () {
    return view('/agregar_personas');
});

Route::get('/roles', function () {
    return view('/roles');
});
