@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Editar Tarefa</h1>

    <form method="POST" action="">
        @csrf

        <div class="mb-3">
            <label for="tituloTarefa" class="form-label">Título</label>
            <input type="text" id="tituloTarefa" name="tituloTarefa" class="form-control" value="Título da Tarefa" required>
        </div>

        <div class="mb-3">
            <label for="descricaoTarefa" class="form-label">Descrição</label>
            <textarea id="descricaoTarefa" name="descricaoTarefa" class="form-control" rows="3" required>Descrição da tarefa</textarea>
        </div>

        <div class="mb-3">
            <label for="dataLimiteTarefa" class="form-label">Data Limite</label>
            <input type="date" id="dataLimiteTarefa" name="dataLimiteTarefa" class="form-control" value="2025-06-01" required>
        </div>

        <div class="mb-4">
            <label for="statusTarefa" class="form-label">Status</label>
            <select id="statusTarefa" name="statusTarefa" class="form-select" required>
                <option value="nao_concluido" selected>Não concluído</option>
                <option value="concluido">Concluído</option>
            </select>
        </div>

        <div class="text-center">
            <a href="{{ route('atividades.index') }}" class="btn btn-outline-danger px-5">Cancelar</a>
            <button type="submit" class="btn btn-outline-primary px-5">Salvar Alterações</button>
        </div>
    </form>
</div>
@endsection
