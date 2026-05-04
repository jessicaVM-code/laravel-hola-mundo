<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', function () {
    return "Pagina de servicios";
});

Route::get('/contacto', function () {
    return "Pagina de contacto";
});

Route::get('/citas', function () {
    return "Mostrar las citas";
});

Route::get('/citas/{cita}', function ($cita) {
    return "Mostrar la cita: " .$cita;
});

Route::patch('/citas/{cita}', function ($cita) {
     return "Editar la cita: " .$cita;
});

Route::delete('/citas/{cita}', function ($cita) {
     return "Borrar la cita: " .$cita;
});

Route::get('/citas/create', function () {
    return "Formulario de citas";
});

Route::post('/citas/create', function () {
    return "CRear la cita";
});
/*
Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/saludo', function () {
    return 'Saludo!!';
});

//Rutas con parametros y expresion regular
Route::get('/saludo/{nombre}/{apellido?}/{id}', function (string $name, string $apellido = null) {
    return 'Saludo: '. $name . " " . $apellido;
})->where('nombre', '[A-Za-z]+')->where('id', '[0-9]+');


Route::get('/usuario/{name}', function ($name) {
    return 'Usuario: '. $name;
})->whereAlphaNumeric('name')->name('usuario');*/
