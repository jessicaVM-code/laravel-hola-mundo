<?php

use App\Http\Controllers\CitasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Respuesta desde API";
});

/*
Route::get('api/citas', [CitasController::class, 'index'] );
Route::get('api/citas/create', [CitasController::class, 'create'] );
Route::get('api/citas/{cita}', [CitasController::class, 'show']  );
Route::get('api/citas/{cita}/edit', [CitasController::class, 'edit'] );
Route::patch('api/citas/{cita}', [CitasController::class, 'update'] );
Route::delete('api/citas/{cita}', [CitasController::class, 'destroy']);
Route::post('api/citas', [CitasController::class, 'store']  );*/

Route::resource('citas', CitasController::class);

