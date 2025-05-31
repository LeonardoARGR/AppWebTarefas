@extends('layout.app')
@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">Minhas Tarefas</h1>

    <div class="table-responsive">
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
                <!-- Linha de exemplo 1 -->
                <tr>
                    <td>Título</td>
                    <td>Descrição</td>
                    <td>01/06/2025</td>
                    <td><span class="badge text-bg-secondary">Não concluído</span></td>
                    <td>
                        <a href="{{ route('atividades.edit') }}" class="btn btn-outline-success btn-sm me-1">Editar</a>
                        <a href="#" class="btn btn-outline-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <!-- Linha de exemplo 2 -->
                <tr>
                    <td>Título</td>
                    <td>Descrição</td>
                    <td>02/06/2025</td>
                    <td><span class="badge text-bg-success">Concluído</span></td>
                    <td>
                        <a href="{{ route('atividades.edit') }}" class="btn btn-outline-success btn-sm me-1">Editar</a>
                        <a href="#" class="btn btn-outline-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('atividades.create') }}" class="btn btn-outline-primary btn-lg w-100 mt-4">
            Criar Nova Tarefa
        </a>
    </div>
</div>

@endsection
