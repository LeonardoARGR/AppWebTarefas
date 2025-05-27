@extends('layout.app')
@section('content')

<h1 class="mb-5 text-center"> Criar Tarefa </h1>

<form method="post" action="">
    @csrf
    <div>
        <div class="">
            <label>Título</label>
            <input type="text" name="tituloTarefa" class="" required>
        </div>
        <div class="">
            <label>Descrição</label>
            <input type="text" name="descricaoTarefa" class="" required>
        </div>
        <div class="">
            <label>Data limite</label>
            <input type="text" name="dataLimiteTarefa" class="" required>
        </div>
    </div>
</form>

@endsection
