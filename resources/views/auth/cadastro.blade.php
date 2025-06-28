<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            max-width: 500px;
            margin: 5rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.08);
        }
        .register-title {
            color: #0442BF;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        .btn-register {
            background-color: #0442BF;
            color: white;
        }
        .btn-register:hover {
            background-color: #0639a0;
        }
        .btn-secondary-link {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #0442BF;
            text-decoration: none;
            font-weight: 500;
        }
        .btn-secondary-link:hover {
            color: #6C9BD9;
            text-decoration: underline;
        }
        label {
            font-weight: 500;
        }
    </style>

</head>
<body>

<div class="register-container">
    <h2 class="text-center register-title">Cadastrar</h2>

    <form id="registerForm" method="POST" action="{{ route('auth.cadastrar') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome completo</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
        </div>

        <div class="mb-4">
            <label for="bio" class="form-label">Bio</label>
            <textarea class="form-control" id="bio" rows="3" name="bio" placeholder="Fale um pouco sobre você..."></textarea>
        </div>

        <button type="submit" class="btn btn-register w-100">Criar Conta</button>
    </form>

    <a href="/login" class="btn-secondary-link">Já possui cadastro?</a>
</div>

</body>
</html>
