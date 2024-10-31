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
}
