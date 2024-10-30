@extends('layouts.app') <!-- Extende o layout base 'app.blade.php' -->


@section('content') <!-- Define a seção 'content' que será inserida no layout base -->
<h1>Editar Usuário</h1>
<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST"> <!-- Formulário para editar um usuário existente -->
    @csrf <!-- Token de proteção contra CSRF -->
    @method('PUT') <!-- Método para atualizar o usuário -->
    <div class="mb-3">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" name="usuario" id="usuario" class="form-control" value="{{ $usuario->usuario }}" required> <!-- Campo para nome do usuário com valor atual -->
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required> <!-- Campo para nova senha -->
    </div>
    <button type="submit" class="btn btn-warning">Atualizar</button> <!-- Botão para enviar o formulário -->
</form>
@endsection <!-- Fim da seção 'content' -->