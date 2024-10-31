<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Discos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Álbuns Disponíveis</h1>

        <div class="mb-3">
            <a href="{{ route('albums.create') }}" class="btn btn-primary">Adicionar Novo Álbum</a>
            <a href="/" class="btn btn-secondary">Voltar para a Pagina Inicial</a>
        </div>

        <ul class="list-group">
            @foreach ($albums as $album)
                <li class="list-group-item">
                    <a href="{{ route('albums.show', $album->id) }}">
                        {{ $album->title }} - {{ $album->artist }} ({{ $album->release_year }})
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
