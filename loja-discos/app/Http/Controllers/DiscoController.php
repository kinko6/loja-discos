<?php

namespace App\Http\Controllers;

use App\Models\Disco; // Certifique-se de que está importando o modelo corretamente
use Illuminate\Http\Request;

class DiscoController extends Controller
{
    public function index()
{
    $discos = Disco::all();
    return view('discos.index', compact('discos'));
}

public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required',
        'artista' => 'required',
        'genero' => 'required',
        'preco' => 'required|numeric',
    ]);

    Disco::create($request->all());
    return redirect()->route('discos.index');
}

}
