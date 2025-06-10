@extends('layout.app')
@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">Minhas Tarefas</h1>

    <div class="table-responsive">

        @if (count($tarefas))
        <table class="table align-middle table-hover text-center">
            <thead class="custom-header">
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Data Limite</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarefas as $tarefa)
                    <tr>
                        <td>{{ $tarefa['titulo'] }}</td>
                        <td>{{ $tarefa['descricao'] }}</td>
                        <td>{{ $tarefa['dataLimite'] }}</td>
                        <td>
                            <a href="{{ route('tarefas.edit', $tarefa['id']) }}" class="btn btn-outline-success btn-sm me-1">Editar</a>
                            <form action="{{ route('tarefas.delete', $tarefa['id']) }}" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @else
        <h2>Nenhuma tarefa encontrada</h2>
        @endif
        <a href="{{ route('tarefas.create') }}" class="btn btn-outline-primary btn-lg w-100 mt-4">
            Criar Nova Tarefa
        </a>
    </div>
</div>

@endsection
