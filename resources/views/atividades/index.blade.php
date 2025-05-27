@extends('layout.app')
@section ('content')

<h1 class="mb-5 text-center"> Minhas Tarefas </h1>

<div class="container text-center">
    
    <div class="row justify-content-center">
        <div class="col-2 border border-dark text-bg-dark fs-5">
            Título
        </div>
        <div class="col-2 border border-dark text-bg-dark fs-5">
            Descrição
        </div>
        <div class="col-2 border border-dark text-bg-dark fs-5">
            Concluído
        </div>
        <div class="col-2 border border-dark text-bg-dark fs-5">
            Data Limite
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-2 border border-dark fs-5">
            Título
        </div>
        <div class="col-2 border border-dark fs-5">
            Descrição
        </div>
        <div class="col-2 border border-dark fs-5">
            Concluído
        </div>
        <div class="col-2 border border-dark fs-5">
            Data Limite
        </div>
    </div>

</div>

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-3">
            <a href="{{ route('atividades.create') }}" class="mt-5 btn btn btn-outline-success btn-lg w-50">Criar Tarefa</a>
        </div>
    </div>
</div>

@endsection