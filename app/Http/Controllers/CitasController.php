<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitasController extends Controller
{
    /**
     * Display a listing of the citas.
     */
    public function index()
    {
       $citas = Cita::all();

       return response()->json($citas);
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
        $cita = Cita::create([
            'mascota' => $request->mascota,
            'tipo' => $request->tipo,
            'fecha' => $request->fecha,
            'dueno' => $request->dueno,
            'telefono' => $request->telefono
        ]);

        return response()->json($cita);
    }

    /**
     * Display the specified citas.
     */
    public function show(string $id)
    {
       $cita = Cita::find($id);

       return response()->json($cita);
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
