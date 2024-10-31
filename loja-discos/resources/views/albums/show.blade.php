<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $album->title }}</title>
</head>
<body>
    <h1>{{ $album->title }}</h1>
    <p>Artista: {{ $album->artist }}</p>
    <p>Ano de Lançamento: {{ $album->release_year }}</p>
    <p>Gênero: {{ $album->genre }}</p>
    <p>Preço: R$ {{ number_format($album->price, 2, ',', '.') }}</p>
    <a href="{{ route('albums.index') }}">Voltar para a lista de álbuns</a>
</body>
</html>
