<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the citas.
     */
    public function index()
    {
        return "Mostrar lista de citas desde el controlador";
    }

    /**
     * Show the form for creating a new citas.
     */
    public function create()
    {
        return "Formulario para crear la cita desde el controlador";
    }

    /**
     * Store a newly created citas in storage.
     */
    public function store(Request $request)
    {
        return "Crear cita en la BD";
    }

    /**
     * Display the specified citas.
     */
    public function show(string $id)
    {
        return 'Mostrar cita desde el controlador: ' . $id;
    }

    /**
     * Show the form for editing the specified citas.
     */
    public function edit(string $id)
    {
        return "Mostrar el formulario para editar la cita" . $id. "desde el controlador";
    }

    /**
     * Update the specified citas in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Actualizar en la BD";
    }

    /**
     * Remove the specified citas from storage.
     */
    public function destroy(string $id)
    {
        return "Eliminado en la BD: ".$id;
    }
}
