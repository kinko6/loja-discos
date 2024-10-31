<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // Método para listar álbuns
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    // Método para mostrar um álbum específico
    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('albums.show', compact('album'));
    }

    // Método para mostrar o formulário de criação de um novo álbum
    public function create()
    {
        return view('albums.create');
    }

    // Método para armazenar o novo álbum
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'release_year' => 'required|integer|digits:4',
            'genre' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
        ]);

        Album::create($request->all());

        return redirect()->route('albums.index')->with('success', 'Álbum adicionado com sucesso!');
    }
}
