<?php
  include('ligacao.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Video Filmes 12J</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.min.css">
    <script src="https://kit.fontawesome.com/8eb70f1a19.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
      <div class="container">
        <a href="../" class="navbar-brand">VideoFilmes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item dropdown" data-bs-theme="light">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" id="themes">Home</a>        
            </li>

          </ul>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Video Filmes <i>12J</i></h1>
            <p class="lead">Na onda do cinema</p>
          </div>
          
        </div>
      </div>

      

      <!-- Tabela Filmes
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid" src="https://img.jakpost.net/c/2020/01/13/2020_01_13_84657_1578902715._large.jpg" alt="Filme">
          </div>
          <div class="col-lg-8">

          <?php
            $consulta = "SELECT * FROM filmes WHERE Codfilmes=" . $_GET['cfilme'];
            $resFilme = $ligacao->query($consulta);
            $filme=$resFilme->fetch_assoc();
          ?>
            <div class="card border-primary mb-3">
                <div class="card-header">Informação completa</div>
                <div class="card-body">
                    <h4 class="card-title"><?= $filme['Nome'] ?></h4>
                    <p class="card-text">
                        <strong>Sinopse: </strong>
                    </p>
                    <p>Classificação: <?= $filme['Classificacao'] ?></p>
                    <p>Duração: <?= $filme['Duracao'] ?></p>
                    <p>Género: <?= $filme['Codgenero'] ?></p>
                    <p>Fornecedor: <?= $filme['Codfornecedor'] ?></p>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
    <!-- Footer
      ================================================== -->


  <footer id="footer" class="bg-dark mb-0 pb-5 pt-5 text-light">
    <div class="container">
      <div class="row bg-dark">
        <div class="col-lg-12 bg-dark">
          <p>Feito por <a href="https://www.tiktok.com/">12J website solutions</a>.</p>
          <p>Ideia baseada em <a href="https://bootswatch.com/cerulean/">website Bootwatch</a>, formatação: 
            <a href="https://getbootstrap.com/" rel="nofollow">Bootstrap</a>, icones: 
            <a href="https://icons.getbootstrap.com/" rel="nofollow">Bootstrap Icons</a>, fonts web: <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p>

        </div>
      </div>
    </div>
  </footer>
    

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
