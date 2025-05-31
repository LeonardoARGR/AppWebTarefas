@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Meus Dados</h1>

    <form method="POST" action="">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" value="Nome do Usuário" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="usuario@email.com" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" id="telefone" name="telefone" class="form-control" value="(11) 99999-9999">
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Nova Senha</label>
            <input type="password" id="senha" name="senha" class="form-control">
        </div>

        <div class="mb-4">
            <label for="confirmarSenha" class="form-label">Confirmar Nova Senha</label>
            <input type="password" id="confirmarSenha" name="confirmarSenha" class="form-control">
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </div>
    </form>
</div>
@endsection
