<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $album->title }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $album->title }}</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Artista: {{ $album->artist }}</h5>
                <p class="card-text"><strong>Ano de Lançamento:</strong> {{ $album->release_year }}</p>
                <p class="card-text"><strong>Gênero:</strong> {{ $album->genre }}</p>
                <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($album->price, 2, ',', '.') }}</p>
                <a href="{{ route('albums.index') }}" class="btn btn-secondary">Voltar para a lista de álbuns</a>
                <form action="{{ route('albums.destroy', $album->id) }}" method="POST" class="mt-3" onsubmit="return confirm('Você tem certeza que deseja excluir este álbum?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir Álbum</button>
                </form>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
