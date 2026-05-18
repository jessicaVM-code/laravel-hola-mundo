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
        $this->validarCita($request);

        $cita = Cita::create($request->all());

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
        $this->validarCita($request);

        $cita = Cita::find($id);

        $cita->update($request->all());

        return response()->json($cita);
    }

    /**
     * Remove the specified citas from storage.
     */
    public function destroy(string $id)
    {
        $cita = Cita::find($id);

        $cita->delete();

        return response()->json([
            'message' => 'Cita eliminada correctamente'
        ]);
    }

    private function validarCita(Request $request){
        $request->validate([
            'mascota' => 'required|string|max:20',
            'tipo' => 'required|string|max:20',
            'fecha' => 'required|date|after_or_equal:today',
            'dueno' => 'required|string|max:20',
            'telefono' => 'required|digits:5',
        ],[
            'fecha.after_or_equal' =>  'La cita no puede ser en una fecha pasada'
        ]
        );
    }
}
