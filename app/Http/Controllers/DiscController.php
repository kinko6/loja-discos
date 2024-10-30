<?php

namespace App\Http\Controllers;

use App\Models\Disc; // Certifique-se de que você tem um modelo Disc
use Illuminate\Http\Request;

class DiscController extends Controller
{
    // Método para listar todos os discos
    public function index()
    {
        $discs = Disc::all();
        return response()->json($discs);
    }

    // Método para mostrar um disco específico
    public function show($id)
    {
        $disc = Disc::find($id);
        if (!$disc) {
            return response()->json(['message' => 'Disco não encontrado'], 404);
        }
        return response()->json($disc);
    }

    // Método para criar um novo disco
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        $disc = Disc::create($request->all());
        return response()->json($disc, 201);
    }

    // Método para atualizar um disco existente
    public function update(Request $request, $id)
    {
        $disc = Disc::find($id);
        if (!$disc) {
            return response()->json(['message' => 'Disco não encontrado'], 404);
        }

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'artist' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer',
        ]);

        $disc->update($request->all());
        return response()->json($disc);
    }

    // Método para excluir um disco
    public function destroy($id)
    {
        $disc = Disc::find($id);
        if (!$disc) {
            return response()->json(['message' => 'Disco não encontrado'], 404);
        }

        $disc->delete();
        return response()->json(['message' => 'Disco excluído com sucesso']);
    }
}
