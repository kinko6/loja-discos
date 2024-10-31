<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Discos</title>
</head>
<body>
    <h1>Álbuns Disponíveis</h1>
    <ul>
        @foreach ($albums as $album)
            <li>
                <a href="{{ route('albums.show', $album->id) }}">
                    {{ $album->title }} - {{ $album->artist }} ({{ $album->release_year }})
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
