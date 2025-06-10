@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Detalhes da Tarefa</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h3>Título</h3>
                        <p>{{ $tarefa->titulo ?? 'Tarefa de Teste' }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <h3>Descrição</h3>
                        <p>{{ $tarefa->descricao ?? 'Esta é uma descrição de teste para a tarefa. Aqui você pode ver todos os detalhes importantes sobre a atividade.' }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <h3>Data Limite</h3>
                        <p>{{ $tarefa->data_limite ?? '2024-03-20' }}</p>
                    </div>
                    
                    <div class="mt-4">
                        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>
                        <a href="{{ route('tarefas.edit', $tarefa->id ?? 1) }}" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 