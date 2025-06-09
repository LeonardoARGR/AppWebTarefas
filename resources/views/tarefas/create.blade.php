@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Criar Tarefa</h2>

    <form method="post" action="{{ route('tarefas.store') }}" class="mx-auto" style="max-width: 600px;">
        @csrf

        <div class="mb-4">
            <label for="tituloTarefa" class="form-label">Título</label>
            <input type="text" id="tituloTarefa" name="tituloTarefa" class="form-control border-0 border-bottom rounded-0 shadow-none" required>
        </div>

        <div class="mb-4">
            <label for="descricaoTarefa" class="form-label">Descrição</label>
            <textarea id="descricaoTarefa" name="descricaoTarefa" class="form-control border-0 border-bottom rounded-0 shadow-none" rows="3" required></textarea>
        </div>

        <div class="mb-4">
            <label for="dataLimiteTarefa" class="form-label">Data limite</label>
            <input type="date" id="dataLimiteTarefa" name="dataLimiteTarefa" class="form-control border-0 border-bottom rounded-0 shadow-none" required>
        </div>

        <div class="mb-4">
            <label for="statusTarefa" class="form-label">Status</label>
            <select id="statusTarefa" name="statusTarefa" class="form-select border-0 border-bottom rounded-0 shadow-none" required>
                <option value="nao_concluido">Não concluído</option>
                <option value="concluido">Concluído</option>
            </select>
        </div>

        <div class="text-center">
            <a href="{{ route('tarefas.index') }}" class="btn btn-outline-danger px-5">Cancelar</a>
            <button type="submit" class="btn btn-outline-primary px-5">Salvar Tarefa</button>
        </div>
    </form>
</div>
@endsection
