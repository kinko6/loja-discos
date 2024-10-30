<?php

namespace App\Models; // ou App se não estiver usando o diretório Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'artista', 'genero', 'preco'];
}
