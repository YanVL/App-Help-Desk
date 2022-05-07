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
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="valida_login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              
              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
              
                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>

              <?php } ?>

              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
              
              <div class="text-danger">
                Faça login antes de acessar as páginas protegidas
              </div>

            <?php } ?>

              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>