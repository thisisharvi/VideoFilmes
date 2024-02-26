<?php
include('ligacao.php');

//Receber variável pelo endereço GET
$cod=filter_input(INPUT_GET, 'cfilme');

if(empty($cod)) {
  header('Location: index.php?msg=flmnaoencontrado');
  return;
}
else {
  $consulta = "SELECT * FROM filmes WHERE Codfilmes='$cod'";
  $resultado = $ligacao->query($consulta);
  if($resultado) {
     $filme = $resultado->fetch_assoc();
  }
}
 
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
          <img class="img-fluid" src="images/filme.png" />
        </div>
        <!-- Info do filme -->
        <div class="col-lg-6">


          <div class="card border-primary mb-3">
            <div class="card-header">Edição de filme</div>
            <div class="card-body">
              <form name="formEditaFilme" method="POST" action="editaFilmeBD.php">
                <fieldset>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputNome">Nome do filme</label>
                    <input name="nome" type="text" class="form-control" 
                        value="<?= $filme['Nome'] ?>" placeholder="Título do filme" id="inputNome">
                  </div>

                  <div class="form-group">
                    <label for="selectClassificacao" class="form-label mt-4">Classificação</label>
                    <select name="classificacao" class="form-select" id="selectClassificacao">
                      <option>Selecionar</option>  
                      <option value="M4" <?php if($filme['Classificacao']=="M4") echo "selected"; ?>>M4</option>
                      <option value="M6" <?php if($filme['Classificacao']=="M6") echo "selected"; ?>>M6</option>
                      <option value="M12" <?php if($filme['Classificacao']=="M12") echo "selected"; ?>>M12</option>
                      <option value="M16" <?php if($filme['Classificacao']=="M16") echo "selected"; ?>>M16</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectGenero" class="form-label mt-4">Género</label>
                    <select name="genero" class="form-select" id="selectGenero">
                      <option>Selecionar</option>  
                      <option value="1" <?php if($filme['Codgenero']==1) echo "selected"; ?>>Ação</option>
                      <option value="2" <?php if($filme['Codgenero']==2) echo "selected"; ?>>Comédia</option>
                      <option value="3" <?php if($filme['Codgenero']==3) echo "selected"; ?>>3</option>
                      <option value="4" <?php if($filme['Codgenero']==4) echo "selected"; ?>>4</option>
                      <option value="5" <?php if($filme['Codgenero']==5) echo "selected"; ?>>5</option>
                      <option value="6" <?php if($filme['Codgenero']==6) echo "selected"; ?>>6</option>
                      <option value="7" <?php if($filme['Codgenero']==7) echo "selected"; ?>>7</option>
                      <option value="8" <?php if($filme['Codgenero']==8) echo "selected"; ?>>8</option>
                      <option value="9" <?php if($filme['Codgenero']==9) echo "selected"; ?> >9</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDuracao">Duração</label>
                    <input name="duracao" type="text" class="form-control"
                      value="<?= $filme['Duracao'] ?>"  placeholder="Duração do filme" id="inputDuracao">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputFornecedor">CodFornecedor</label>
                    <input name="fornecedor" type="text" class="form-control"
                      value="<?= $filme['Codfornecedor'] ?>" placeholder="Código do fornecedor" id="inputFornecedor">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputValAluguer">Valor de Aluguer</label>
                    <input name="valAluguer" type="text" class="form-control"
                      value="<?= $filme['ValorAluguer'] ?>" placeholder="Valor em euros €" id="inputValAluguer">
                  </div>
                  <div class="form-group">
                    <p></p>
                    <button type="submit" class="btn btn-warning">Atualizar</button>
                  </div>
                </fieldset>
                <input name="cFilme" type="hidden" value="<?= $filme['Codfilmes'] ?>">
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