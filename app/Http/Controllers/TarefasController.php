<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TarefasController extends Controller
{
    private $urlApi = 'https://webapptech.site/apitarefas/api/tarefas';

    public function index() {
        $response = Http::get($this->urlApi);
        $data = $response->json();
        return view('tarefas.index', ['tarefas' => $data['data'] ?? [], 'message' => $data['message'] ?? '']);
    }

    public function store(Request $request) {
        Http::post($this->urlApi, $request->only('titulo', 'descricao', 'data_limite', 'status'));
        return redirect()->route('tarefas.index');
    }

    public function create() {
        return view('tarefas.create');
    }

    public function edit($id) {
        $response = Http::get("{$this->urlApi}/{$id}");
        $data = $response->json();
        return view('tarefas.edit', ['tarefa' => $data['data'] ?? null]);
    }

    public function update(Request $request, $id) {
        Http::put("{$this->urlApi}/{$id}", $request->only('titulo', 'descricao', 'data_limite', 'status'));
        return redirect()->route('tarefas.index');
    }

    public function delete($id) {
        Http::delete("{$this->urlApi}/{$id}");
        return redirect()->route('tarefa.index');
    }

}
