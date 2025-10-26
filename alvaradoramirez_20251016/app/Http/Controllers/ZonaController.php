<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\Pais;

class ZonaController extends Controller
{
     public function index()
    {
        $zonas = Zona::all();
        return response()->json($zonas);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_zona' => 'required|string|max:255',
            'id_pais' => 'required|integer'
        ]);

        $zona = Zona::create($validated);
        return response()->json($zona, 201);
    }

    public function getByPais($id_pais)
    {
        // Option 1: Using Eloquent relationship
        $pais = Pais::with('zonas')->find($id_pais);

        if (!$pais) {
            return response()->json(['message' => 'Pais not found'], 404);
        }

        return response()->json([
            'pais' => $pais->nombre_pais,
            'zonas' => $pais->zonas
        ]);
    }

}
