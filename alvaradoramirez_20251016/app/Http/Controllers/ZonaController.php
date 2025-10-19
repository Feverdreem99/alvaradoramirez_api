<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;

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
}
