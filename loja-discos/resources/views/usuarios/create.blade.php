@extends('layouts.app') <!-- Extende o layout base 'app.blade.php' -->




@section('content') <!-- Define a seção 'content' que será inserida no layout base -->
<h1>Adicionar Usuário</h1>
<form action="{{ route('usuarios.store') }}" method="POST"> <!-- Formulário para adicionar um novo usuário -->
    @csrf <!-- Token de proteção contra CSRF -->
    <div class="mb-3">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" name="usuario" id="usuario" class="form-control" required> <!-- Campo para nome do usuário -->
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required> <!-- Campo para senha -->
    </div>
    <button type="submit" class="btn btn-success">Adicionar</button> <!-- Botão para enviar o formulário -->
</form>
@endsection <!-- Fim da seção 'content' -->