@extends('layout.app')
@section ('content')

<h1 class="mb-5 text-center"> Cursos Cadastrados </h1>

<div class="container text-center">
    
    <div class="row justify-content-center">
        <div class="col-2 border border-dark">
            Título
        </div>
        <div class="col-2 border border-dark">
            Descrição
        </div>
        <div class="col-2 border border-dark">
            Concluído
        </div>
        <div class="col-2 border border-dark">
            Data Limite
        </div>
    </div>
    <div class="row">
        <div class="col">
            
        </div>
    </div>

</div>

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-5">
            <a href="" class="mt-5 btn btn btn-outline-success btn-lg w-50">Cadastrar Curso</a>
        </div>
    </div>
</div>

@endsection