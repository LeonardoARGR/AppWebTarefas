<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 use Illuminate\Support\Facades\Session;
use Exception;
class TarefasController extends Controller

{

    private $urlApi = 'https://webapptech.site/apitarefas/api/tarefas';
 
    public function index()
    {

        $userId = Session::get('firebase_user.uid');


        if (!$userId) {
        return redirect('/login');
         }

        $response = Http::withHeaders([

            'X-User-Id' => $userId

        ])->get($this->urlApi);
        $data = $response->json();
        error_log($response->body());
        return view('tarefas.index', [
            'tarefas' => $data['tarefas'] ?? [],
            'message' => $data['mensagem'] ?? ''
        ]);
    }
 
    public function create()
    {
        return view('tarefas.create');
    }

    public function store(Request $request)
    {
        try
        {
        $payload = $request->only('titulo', 'descricao', 'dataLimite');
        
        $userId = Session::get('firebase_user.uid');
        if (!$userId) {
        return redirect('/login');
         }

        Http::withHeaders([
            'X-User-Id' => $userId,
        ])->post("{$this->urlApi}", $payload);
        error_log("Tarefa cadastrada", 0);
        return redirect()->route('tarefas.index');
        }catch(Exception $ex)
        {
            error_log($ex); 
        }
    }
 
    public function edit($id)
    {   
        $userId = Session::get('firebase_user.uid');
        if (!$userId) {
        return redirect('/login');
        }
        $response = Http::withHeaders([
            'X-User-Id' => $userId,
        ])->get("{$this->urlApi}/{$id}");
 
        $data = $response->json();
 
        return view('tarefas.edit', ['tarefa' => $data['tarefa'] ?? null]);

    }
 
    public function update(Request $request, $id)
    {
        try
        {
        $payload = $request->only('titulo', 'descricao', 'dataLimite');
        $userId = Session::get('firebase_user.uid');
        if (!$userId) {
        return redirect('/login');
        }
        $payload['userId'] = $userId;
        
        Http::withHeaders([
            'X-User-Id' => $userId,
        ])->put("{$this->urlApi}/{$id}", $payload);
        error_log("Tarefa atualizada", 0);
        return redirect()->route('tarefas.index');
        }catch(Exception $ex)
        {
            error_log($ex, 0);
        }

    }
 
    public function delete($id)
    {
        try
        {
        $userId = Session::get('firebase_user.uid');
        if (!$userId) {
        return redirect('/login');
        }
        
        Http::withHeaders([
            'X-User-Id' => $userId,
        ])->delete("{$this->urlApi}/{$id}");
        error_log("Tarefa deletada", 0);
        return redirect()->route('tarefas.index');
        
        }catch(Exception $ex)
        {
            error_log($ex, 0);
        }
        
    }

}

