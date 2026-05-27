<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'message' => 'Registro creado correctamente'
        ]);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if(!$user){
            return response()->json([
                'message' => 'No existe usuario'
            ]);
        }

        if(!Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'No coincide la contraseña'
            ]);
        }

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'token' => $token
        ]);
    }
}
