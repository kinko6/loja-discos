<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álbuns</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Álbuns</h1>
        
        <!-- Verificar se há álbuns -->
        @if($albums->isEmpty())
            <p>Nenhum álbum encontrado.</p>
        @else
            <!-- Loop para exibir álbuns -->
            <div class="list-group">
                @foreach($albums as $album)
                    <a href="{{ route('albums.show', $album->id) }}" class="list-group-item list-group-item-action">
                        <h5>{{ $album->title }}</h5>
                        <p><strong>Artista:</strong> {{ $album->artist }}</p>
                        <p><strong>Gênero:</strong> {{ $album->genre }}</p>
                        <p><strong>Ano de Lançamento:</strong> {{ $album->release_year }}</p>
                    </a>
                @endforeach
            </div>
        @endif
        
        <a href="{{ route('albums.create') }}" class="btn btn-primary mt-3">Adicionar Novo Álbum</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
