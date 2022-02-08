<?php
  require 'backend/cube_controller.php';
  error_reporting(0);
  ini_set(“display_errors”, 0 );
?>
<!DOCTYPE html>
<html lang="pt-br">
  <!--HEAD-->
  <head>
    <!--META TAGS-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- FONTS AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--ICON-->
    <link rel="icon" href="img/icon.svg" />
    <!--TITLE-->
    <title>Cube | Descomplicando a sua vida financeira</title>
  </head>
  <body class="backg">
    <!--BODY-->
    <header>
      <nav class="navbar navbar-expand-sm bg-dark fixed-top">
        <div class="container">
          <!--NAVBAR-->
          <a class="navbar-brand">
            <img src="img/logo-register.svg" width="180px">
          </a>
      </nav>
    </header>
    <!--FORM SECTION-->
    <section id="register" class="section area2">
      <div class="container">
        <div class="row">
            <div class="col border">
                <form method="post" action="backend/cube_controller.php?action=register">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome*</label>
                        <input name="name" type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Sobrenome*</label>
                        <input name="surname" type="text" class="form-control" id="surname" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input name="email" type="email" class="form-control" id="email" value="<?php echo $_POST['email'] ?>" placeholder="exemplo@email.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha1" class="form-label">Senha*</label>
                        <input name="password" type="password" class="form-control" id="senha1" minlength="8" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha2" class="form-label">Confirme a senha*</label>
                        <input name="password_confirm" type="password" class="form-control" id="senha2" minlength="8" required>
                        <div id="emailHelp" class="form-text">* Campos obrigatórios</div>
                    </div>
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </form>
            </div>
      </div>
    </section>
    <!-- ALERTS -->
      <!-- WHITE -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'white'){ ?>
        <script>
          alert ('Favor preencha todos os campos obrigatórios.');
        </script>
      <?php } ?>
      <!-- UNLIKE -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'unlike'){ ?>
        <script>
          alert ('Senhas não coincidem, tente novamente.');
        </script>
      <?php } ?>
    <!-- JQUERY, POPPER AND BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
