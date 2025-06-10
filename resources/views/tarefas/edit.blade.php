@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Editar Tarefa</h1>

    <form method="POST" action="{{ route('tarefas.update', $tarefa['id']) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="tituloTarefa" class="form-label">Título</label>
            <input type="text" id="tituloTarefa" name="titulo" class="form-control" value="{{ $tarefa['titulo'] }}" required>
        </div>

        <div class="mb-3">
            <label for="descricaoTarefa" class="form-label">Descrição</label>
            <textarea id="descricaoTarefa" name="descricao" class="form-control" rows="3" required>{{ $tarefa['descricao'] }}</textarea>
        </div>

        <div class="mb-3">
            <label for="dataLimiteTarefa" class="form-label">Data Limite</label>
            <input type="date" id="dataLimiteTarefa" name="dataLimite" class="form-control" value="{{ $tarefa['dataLimite'] }}" required>
        </div>

        <div class="text-center">
            <a href="{{ route('tarefas.index') }}" class="btn btn-outline-danger px-5">Cancelar</a>
            <button type="submit" class="btn btn-outline-primary px-5">Salvar Alterações</button>
        </div>
    </form>
</div>
@endsection
