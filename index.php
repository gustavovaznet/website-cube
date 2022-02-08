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
    <link rel="icon" href="img/favicon.svg"/>
    <!--TITLE-->
    <title>Cube | Descomplicando a sua vida financeira</title>
  </head>
  <body>
    <!--BODY-->
    <header>
      <nav class="navbar navbar-expand-sm bg-dark fixed-top">
        <div class="container">
          <!--NAVBAR-->
          <a href="index.php" class="navbar-brand">
            <img src="img/logo.svg" width="180px">
          </a>
          <!--BUTTON-->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!--NAVBAR COLLAPSE-->
          <div class="menu">
            <div class="collapse navbar-collapse" id="nav-principal">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="#home" class="nav-link link-menu">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link link-menu">Sobre nós</a>
                </li>
                <li class="nav-item">
                  <a href="#advantages" class="nav-link link-menu">Vantagens</a>
                </li>
                <li class="nav-item">
                  <a href="#plans" class="nav-link link-menu">Planos</a>
                </li>
                <li class="nav-item">
                  <a href="#footer" class="nav-link link-menu">Contato</a>
                </li>
                <span> | </span>
                <li class="nav-item">
                  <a href="" class="btn btn-outline-light ml-4" data-bs-toggle="modal" data-bs-target="#modal">
                    Entrar
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- MODAL -->
      <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="modalLabel">Entrar</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h5>
                Se já possui cadastro na plataforma Cube, baixe o nosso app para:<br /><br />
                <!-- ANDROID -->
                <i class="fab fa-android fa-lg"></i> 
                Android -> 
                <a href="https://play.google.com/store?hl=pt_BR&gl=US" target="_blank" style="text-decoration: none;color: #111">
                  <i class="fab fa-google-play"></i> Play Store
                </a><br /><br />
                <!-- IOS -->
                <i class="fab fa-apple fa-lg"></i> 
                IOS ->
                <a href="https://www.apple.com/br/app-store/" target="_blank" style="text-decoration: none;color: #111">
                  <i class="fab fa-app-store-ios"></i> App Store
                </a>
              </h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Entendi</button>
            </div>
          </div>
        </div>
      </div>
    <!--HOME SECTION-->
    <section id="home" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h1 class="display-4">Suas finanças, descomplicadas</h1>
              <p>
                Venha fazer parte do sistema financeiro online mais popular do Brasil, 
                são mais de 800 mil usuários que tiveram suas vidas financeiras reorganizadas, junte-se a nós você também.
              </p>
              <!--FORM-->
              <form class="mt-4 mb-4" method="post" action="register.php">
                <div class="input-group input-group-lg">
                  <input name="email" type="email" placeholder="Seu e-mail" class="form-control" aria-describedby="button-register" required>
                  <button type="submit" class="btn btn-dark" id="button-register">Cadastre-se</button>
                </div>
              </form>
              <p>Disponível também para
                <a href="https://play.google.com/store?hl=pt_BR&gl=US" target="_blank" class="btn btn-outline-light">
                  <i class="fab fa-android fa-lg"></i>
                </a>
                <a href="https://www.apple.com/br/app-store/" target="_blank" class="btn btn-outline-light">
                  <i class="fab fa-apple"></i>
                </a>
              </p>
            </div>
          </div>
          <div class="col-md-6 d-none d-md-block marg">
              <img src="img/woman.png">
          </div>
        </div>
      </div>
    </section>
    <!--SECTION ABOUT US-->
    <section id="about" class="section area backg">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Quem somos?</h2>
              <p>
                 O Cube Financial System nasceu em 2010 com a missão de organizar a vida financeiro de seus clientes.
                 Atuando em todo o território brasileiro e com mais de 800 mil clientes cadastrados, o nosso software o Cube
                 é pioneiro em organização financeira. Saiba mais sobre nosso software e suas funcionalizades se cadastrando
                 no nosso site.
              </p>
              <a class="btn btn-dark" href="#home">Cadastre-se aqui</a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="marg">
              <img src="img/phone.png" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--SECTION ADVANTAGES-->
    <section id="advantages" class="section area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="marg">
              <img src="img/watch.png" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Vantagens de usar o Cube</h2>
              <p>
                 Você vai adquirir muitas vantagens ao utilizar o nosso sistema para gerenciar a suas finanças,
                 a começar pelo tempo, você além de poupar dinheiro e recursos financeiros em geral poupará
                 muito tempo pois o nosso sistema é totalmente automatizado e gerencia tudo pra você. Se preocupe com
                 outras coisas da vida e deixa o Cube gerenciar as finanças pra você :)
              </p>
              <a class="btn btn-dark" href="#home">Cadastre-se aqui</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--SECTION PLANS-->
    <section id="plans" class="section area backg">
      <div class="container">
        <div class="row marg">
          <div class="col-md-4 d-flex">
            <div class="align-self-start">
              <h2>Starter | Free</h2>
              <p>
                 <ul>
                   <li>Conta para 1 usuário</li>
                   <li>Suporte via email</li>
                   <li>Direito a 1 relatório básico por mês</li>
                 </ul>
              </p>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="align-self-start">
              <h2>Pro | R$ 29,90/mês</h2>
              <ul>
                <li>Cartão Prata Cube Club</li>
                <li>Conta para até 10 usuários</li>
                <li>Suporte via email, chat e telefone</li>
                <li>Até 20 relatórios básicos por mês</li>
                <li>Até 5 relatórios detalhados por mês</li>
                <li>Clube de vantagens com descontos</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="align-self-start">
              <h2>Gold | R$ 49,90/mês</h2>
              <ul>
                <li>Cartão Gold Cube Club</li>
                <li>Contas de usuário ilimitadas</li>
                <li>Relatórios básicos ilimitados por mês</li>
                <li>Até 20 relatórios detalhados por mês</li>
                <li>Suporte com consultoria vip e personalizada</li>
                <li>Clube de vantagens com descontos</li>
                <li>Acesso ao portal Cube com mais de 20 cursos de finanças disponíveis</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--SECTION FOOTER-->
    <footer id="footer" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a>
              <img src="img/logo-footer.svg" style="width: 200px; margin-bottom: 20px;"/>
            </a>
            <a href="https://play.google.com/store?hl=pt_BR&gl=US" target="_blank">
              <img src="img/flag_01.png" style="width: 200px; margin-bottom: 20px;"/>
            </a>
            <a href="https://www.apple.com/br/app-store/" target="_blank">
              <img src="img/flag_02.png" style="width: 200px;"/>
            </a>
          </div>
          <div class="col-md-4">
            <h5>Cu<b>be</b> Financial Systems S/A</h5><br />
            <h6>Matriz</h6>
            <p>Rua Noruega n° 125 Bairro Alto São Paulo-SP
              <br />
              <i class="fas fa fa-phone"></i> (11) 3232-5555
              <br />
              <i class="fas fa fa-envelope-square"></i> contato.sp@cube.com.br
            </p>
            <br />
            <h6>Filial</h6>
            <p>Av. Sete de Setembro n° 2014 Centro Curitiba-PR
              <br />
              <i class="fas fa fa-phone"></i> (41) 3232-5555
              <br />
              <i class="fas fa fa-envelope-square"></i> contato.pr@cube.com.br
            </p>
          </div>
          <div class="col-md-4 d-flex justify-content-center align-self-start">
            <a href="https://www.google.com/intl/pt/gmail/about/" target="_blank" class="btn btn-outline-dark">
              <i class="fas fa-2x fa-envelope-square"></i>
            </a>
            <a href="https://pt-br.facebook.com/" target="_blank" class="btn btn-outline-dark ml-2">
              <i class="fab fa-2x fa-facebook"></i>
            </a>
            <a href="https://twitter.com/login?lang=pt" target="_blank" class="btn btn-outline-dark ml-2">
              <i class="fab fa-2x fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-dark ml-2">
              <i class="fab fa-2x fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/" target="_blank" class="btn btn-outline-dark ml-2">
              <i class="fab fa-2x fa-youtube"></i>
            </a>
          </div>
        </div>
        <h6 class="box" style="text-align: center;">
          Cube Financial System S/A 2021 © Todos os direitos reservados
        </h6>
      </div>
    </footer>
    <!-- ALERTS -->
      <!-- REGISTERED -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'registered'){ ?>
        <script>
          alert ('Cadastro efetuado com sucesso! Baixe o nosso APP e comece já a organizar as suas finanças! :)');
        </script>
      <?php } ?>
    <!-- JQUERY, POPPER AND BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
