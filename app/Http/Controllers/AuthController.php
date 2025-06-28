<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Exception;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $apiKey = env('FIREBASE_API_KEY');

        $response = Http::post("https://identitytoolkit.googleapis.com/v1/accounts:signInWithPassword?key={$apiKey}", [
            'email' => $request->email,
            'password' => $request->password,
            'returnSecureToken' => true
        ]);

        error_log($response, 0);
        if ($response->successful()) {
            $data = $response->json();
            Session::put('firebase_user', [
                'idToken' => $data['idToken'],
                'email' => $data['email'],
                'uid' => $data['localId'],
            ]);
            return redirect('/');
        }

        return redirect()->back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    public function home()
    {
        return view('tarefas.index');
    }

    public function logout()
    {
        Session::forget('firebase_user');
        return redirect('/login');
    }

    public function showRegisterForm()
    {
        return view('auth.cadastro');
    }

    public function register(Request $request)
    {
        try
        {
            $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'name' => 'required|min:3',
            'bio'
        ]);

        $apiKey = env('FIREBASE_API_KEY');

        $response = Http::post("https://identitytoolkit.googleapis.com/v1/accounts:signUp?key={$apiKey}", [
            'email' => $request->email,
            'password' => $request->password,
            'returnSecureToken' => true
        ]);

        if ($response->successful()) {
            $data = $response->json();
            Session::put('firebase_user', [
                'idToken' => $data['idToken'],
                'email' => $data['email'],
                'uid' => $data['localId'],
            ]);
        
        $payload = [
            'fields' => [
                'name' => ['stringValue' => $request->name],
                'bio' => ['stringValue' => $request->bio],
            ]
        ];

        $idToken =$data['idToken'];
        $responseData = Http::withHeaders([
            'Authorization' => "Bearer {$idToken}",
            'Content-Type' => 'application/json',
        ])->post("https://firestore.googleapis.com/v1/projects/acessotarefas-3c92e/databases/(default)/documents/users", $payload);


            return redirect('/');
            
        }

        error_log($response->body());
        echo $response;

        }catch(Exception $ex)
        {
            error_log($ex);
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
            return redirect()->back()->withErrors(['email' => 'Erro ao cadastrar. Talvez o e-mail já esteja em uso.']);
        }
    }
}