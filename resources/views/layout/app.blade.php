<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style> 
      body {
        background-color: #f8f9fa;
      }
      
      .user-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 350px;
        height: 100vh;
        background-color: #0442BF;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 1rem;
        box-shadow: 2px 0 6px rgba(0, 0, 0, 0.1);
      }

      .img-container {
        width: 200px;
        height: 200px;
        overflow: hidden;
        border-radius: 10px;
        margin-bottom: 1rem;
      }

      .img-crop {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .user-container h1 {
        font-size: 1.8rem;
        margin-top: 1rem;
        font-weight: 600;
        color: #ffffff;
      }

      .user-container a.user-link {
        color: white;
        text-decoration: none;
        font-size: 1.1rem;
        margin-top: 0.75rem;
        display: block;
        transition: color 0.2s;
      }

      .user-container a.user-link:hover {
        color: #6C9BD9;
      }

      .main-content {
        flex: 1;
        padding: 2rem;
      }

      .custom-header {
        background-color: #0442BF !important;
      }

      .custom-header th {
        background-color: #0442BF !important;
        color: white !important;
        border-color: #0336A0 !important;
      }
    </style>
  </head>

  <body>
    <div class="d-flex flex-row">
      <!-- Sidebar do usuário -->
      <aside class="user-container">
        <div class="img-container">
          <img class="img-fluid img-crop img-thumbnail" src="https://cdn-icons-png.flaticon.com/512/6543/6543634.png" alt="Imagem do usuário">
        </div>
        <h1>Olá, usuário!</h1>
        
        <a href="{{ route('usuario.index') }}" class="user-link">Meus dados</a>
        <a href="{{ route('tarefas.index') }}" class="user-link">Minhas tarefas</a>
        <a class="user-link">Alterar imagem</a>
      </aside>

      <!-- Conteúdo principal -->
      <main class="main-content container-fluid">
        @yield('content')
      </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
