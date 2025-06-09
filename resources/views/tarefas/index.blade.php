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
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarefas as $tarefa)
                    <tr>
                        <td>{{ $tarefa['titulo'] }}</td>
                        <td>{{ $tarefa['descricao'] }}</td>
                        <td>{{ $tarefa['data_limite'] }}</td>
                        <td><span class="badge text-bg-success">{{ $tarefa['status'] }}</span></td>
                        <td>
                            <a href="{{ route('tarefas.edit') }}" class="btn btn-outline-success btn-sm me-1">Editar</a>
                            <a href="#" class="btn btn-outline-danger btn-sm">Excluir</a>
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
