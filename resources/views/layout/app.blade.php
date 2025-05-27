<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style> 
      .user-container {
        display: flex;
        width: 30vw;
        height: 100vh;
        max-width: 600px;
        justify-content: center;
        align-items: center;
        text-align: center;
      }
      .img-container {
        width: 350px;     /* largura fixa */
        height: 350px;    /* altura fixa */
        overflow: hidden; /* esconde o que passa do limite */
        align-items: center;
        justify-content: center;
      }
      .img-crop {
        width: 100%;
        height: 100%;
        object-fit: cover; /* cobre todo o espaço e corta o excesso */
      }
    </style>
  </head>

  <body>
    <div class='d-flex flex-row justify-content-center'>
      <div class='user-container d-flex flex-column bg-primary-subtle'>
        <div class="img-container">
          <img class="img-fluid img-crop img-thumbnail" src="https://cdn-icons-png.flaticon.com/512/6543/6543634.png"></img>
        </div>
        <h1 class="mt-4" >Olá, usuário!</h2>
        
        <a><h4 class="mt-3" >Meus dados</h2></a>
        <a><h4 class="mt-2" >Alterar imagem</h2></a>
      </div>

      <div class='container-fluid mt-4 row d-flex justify-content-center'>
    
    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>