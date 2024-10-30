@extends('layouts.app') <!-- Extende o layout base 'app.blade.php' -->


@section('content') <!-- Define a seção 'content' que será inserida no layout base -->
<h1>Usuários</h1>
<a href="{{ route('discos.create') }}" class="btn btn-primary">Adicionar Usuário</a>


@if (session('success')) <!-- Verifica se existe uma mensagem de sucesso na sessão -->
    <div class="alert alert-success mt-3">
        {{ session('success') }} <!-- Exibe a mensagem de sucesso -->
    </div>
@endif


<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($discos as $disco) <!-- Itera sobre a lista de usuários -->
        <tr>
            <td>{{ $disco->id }}</td> <!-- Exibe o ID do usuário -->
            <td>{{ $disco->disco }}</td> <!-- Exibe o nome do usuário -->
            <td>
                <a href="{{ route('discos.edit', $disco->id) }}" class="btn btn-warning">Editar</a> <!-- Link para editar o usuário -->
                <form action="{{ route('discos.destroy', $disco->id) }}" method="POST" style="display:inline;"> <!-- Formulário para excluir o usuário -->
                    @csrf <!-- Token de proteção contra CSRF -->
                    @method('DELETE') <!-- Método para excluir o usuário -->
                    <button type="submit" class="btn btn-danger">Excluir</button> <!-- Botão para excluir o usuário -->
                </form>
            </td>
        </tr>
        @endforeach <!-- Fim da iteração sobre usuários -->
    </tbody>
</table>
@endsection <!-- Fim da seção 'content' -->