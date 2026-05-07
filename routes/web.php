<?php

use App\Http\Controllers\CitasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/citas', [CitasController::class, 'index'] );
Route::get('/citas/create', [CitasController::class, 'create'] );
Route::get('/citas/{cita}', [CitasController::class, 'show']  );
Route::get('/citas/{cita}/edit', [CitasController::class, 'edit'] );
Route::patch('/citas/{cita}', [CitasController::class, 'update'] );
Route::delete('/citas/{cita}', [CitasController::class, 'destroy']);
Route::post('/citas/create', [CitasController::class, 'store']  );*/

Route::resource('citas', CitasController::class);

