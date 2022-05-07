<?php require_once "validador_acesso.php";?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Help Desk</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">

  <!-- CSS Customizado -->
  <link rel="stylesheet" href="estilo/estilo.css">

</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
      <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>

    <!-- logoff -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="logoff.php" class="nav-link">SAIR</a>
      </li>
    </ul>
    
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-home">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <a href="abrir_chamado.php">
                  <img src="imagens/formulario_abrir_chamado.png" width="70" height="70" alt="abrir_chamado">
                </a>
              </div>

              <div class="col-6 d-flex justify-content-center">
                <a href="consultar_chamado.php">
                  <img src="imagens/formulario_consultar_chamado.png" width="70" height="70" alt="consultar_chamado">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>