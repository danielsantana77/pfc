<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PFC - Programa de Fomento a Capacitação</title>
    <link rel="icon" href="img/favicon.png" type="image/favicon.ico"/>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="http://www.ecompjr.com.br/">EComp Jr.</a>
          
        <!-- Login -->        
        <li class="dropdown navbar-brand"><a class="dropdown-toggle" href="#" data-toggle="dropdown" style="color: white; text-decoration: none;"><span class="glyphicon glyphicon-log-in"></span> Login</a>
          <div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
            <form class="form-horizontal" action="routes/routes.php" method="POST">
              <input id="login" class="form-control login" type="text" name="login" placeholder="Usuario.." />
              <input id="senha" class="form-control login" type="password" name="senha" placeholder="Senha.."/>
              <input type="submit" name="loginAttempt"/>
            </form>
          </div>
        </li>

          <?php
            if(isset($_GET["valid"]) && $_GET["valid"] == "false") {
              echo "<h5> Dados incorretos! </h5>";
            }
          ?>

        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pfc.html">SOBRE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="member.html">MEMBROS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/logoNome2.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>PFC</h1>
              <span class="subheading">Programa de Fomento a Capacitação</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="pfc.html">
              <h2 class="post-title">
                Programa de Fomento a Capacitação
              </h2>
              <h3 class="post-subtitle">
                O que é?
              </h3>
            </a>
          </div>
          <hr>
          <div class="post-preview">
            <a href="member.html">
              <h2 class="post-title">
                Membros e pontos de PFC
              </h2>
              <h3 class="post-subtitle">
                Pontos de cada membro com suas respectivas fotos.                
              </h3>
            </a>
          </div>
          <hr>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a target="_blank" href="https://twitter.com/EcompJr">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://www.facebook.com/ecompjr.uefs/">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://github.com/EcompJr">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; ECompJr. 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
