<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
 
class TarefasController extends Controller

{

    private $urlApi = 'https://webapptech.site/apitarefas/api/tarefas';

    private $uid = 'kcYbiFQJ0HSLOqLpeRkjYBpa6LM2';
 
    public function index()

    {

        $response = Http::withHeaders([

            'X-User-Id' => $this->uid

        ])->get($this->urlApi);
 
        $data = $response->json();
 
        return view('tarefas.index', [

            'tarefas' => $data['tarefas'] ?? [],

            'message' => $data['mensagem'] ?? ''

        ]);

    }
 
    public function store(Request $request)

    {

        $payload = $request->only('titulo', 'descricao', 'dataLimite');

        $payload['userId'] = $this->uid;
 
        Http::withHeaders([

            'X-User-Id' => $this->uid

        ])->post($this->urlApi, $payload);
        
 
        return redirect()->route('tarefas.index');

    }
 
    public function create()

    {

        return view('tarefas.create');

    }
 
    public function edit($id)

    {

        $response = Http::withHeaders([

            'X-User-Id' => $this->uid

        ])->get("{$this->urlApi}/{$id}");
 
        $data = $response->json();
 
        return view('tarefas.edit', ['tarefa' => $data['tarefa'] ?? null]);

    }
 
    public function update(Request $request, $id)

    {

        $payload = $request->only('titulo', 'descricao', 'dataLimite');

        $payload['userId'] = $this->uid;
 
        Http::withHeaders([

            'X-User-Id' => $this->uid

        ])->put("{$this->urlApi}/{$id}", $payload);
 
        return redirect()->route('tarefas.index');

    }
 
    public function delete($id)

    {

        Http::withHeaders([

            'X-User-Id' => $this->uid

        ])->delete("{$this->urlApi}/{$id}");
 
        return redirect()->route('tarefas.index');

    }

}

 