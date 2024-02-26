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
</head>

<body>
  <div class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
    <div class="container">
      <a href="index.php" class="navbar-brand">VideoFilmes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item dropdown" data-bs-theme="light">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes">Home</a>

          </li>

        </ul>
      </div>
    </div>
  </div>

  <div class="container">

    <!-- Filme
      ================================================== -->
    <div class="bs-docs-section">
      <div class="row  d-flex justify-content-center">
        <!-- Imagem do filme -->
        <div class="col-lg-2">
          <img class="img-fluid" src="https://img.jakpost.net/c/2020/01/13/2020_01_13_84657_1578902715._large.jpg" />
        </div>
        <!-- Info do filme -->
        <div class="col-lg-6">


          <div class="card border-primary mb-3">
            <div class="card-header">Inserir filme na BD</div>
            <div class="card-body">
              <form name="formInsereFIlme" method="POST" action="insereFilmeBD.php">
                <fieldset>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputNome">Nome do filme</label>
                    <input name="nome" type="text" class="form-control" placeholder="Título do filme" id="inputNome">
                  </div>

                  <div class="form-group">
                    <label for="selectClassificacao" class="form-label mt-4">Classificação</label>
                    <select name="classificacao" class="form-select" id="selectClassificacao">
                      <option>Selecionar</option>  
                      <option value="M4">M4</option>
                      <option value="M6">M6</option>
                      <option value="M12">M12</option>
                      <option value="M16">M16</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectGenero" class="form-label mt-4">Género</label>
                    <select name="genero" class="form-select" id="selectGenero">
                      <option>Selecionar</option>  
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDuracao">Duração</label>
                    <input name="duracao" type="text" class="form-control" placeholder="Duração do filme" id="inputDuracao">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputFornecedor">CodFornecedor</label>
                    <input name="fornecedor" type="text" class="form-control" placeholder="Código do fornecedor" id="inputFornecedor">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputValAluguer">Valor de Aluguer</label>
                    <input name="valAluguer" type="text" class="form-control" placeholder="Valor em euros €" id="inputValAluguer">
                  </div>
                  <div class="form-group">
                    <p></p>
                    <button type="submit" class="btn btn-primary">Inserir filme</button>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>



      <!-- Footer
      ================================================== -->

    </div>


    <footer id="footer" class="bg-dark mb-0 pb-5 pt-5 text-light">
      <div class="container">
        <div class="row bg-dark">
          <div class="col-lg-12 bg-dark">
            <p>Feito por <a href="https://www.tiktok.com/">12J website solutions</a>.</p>
            <p>Ideia baseada em <a href="https://bootswatch.com/cerulean/">website Bootwatch</a>, formatação:
              <a href="https://getbootstrap.com/" rel="nofollow">Bootstrap</a>, icones:
              <a href="https://icons.getbootstrap.com/" rel="nofollow">Bootstrap Icons</a>, fonts web: <a href="https://fonts.google.com/" rel="nofollow">Google</a>.
            </p>

          </div>
        </div>
      </div>
    </footer>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>