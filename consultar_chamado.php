<?php require_once "validador_acesso.php" ?>

<?php
  $chamados = array();

  $arquivo = fopen('../../app_help_desk/arquivo.txt', 'r');

  while (!feof($arquivo)) {
    $chamados[] = fgets($arquivo);
  }

  fclose($arquivo);
?>

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

    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="logoff.php" class="nav-link">SAIR</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">

            <?php foreach ($chamados as $chamado) { ?>

              <?php

                $chamado_dados = explode('#', $chamado);

                if ($_SESSION['perfil_id'] == 2 && $_SESSION['id'] != $chamado_dados[0]) {
                  continue;
                }

                if (count($chamado_dados) < 3) {
                  continue;
                }

              ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"> <?= $chamado_dados[1] ?> </h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text"><?= $chamado_dados[3] ?></p>
                </div>
              </div>

            <?php } ?>


            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>