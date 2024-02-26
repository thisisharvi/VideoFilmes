
<?php
include('ligacao.php');

//Verificar se a página foi chamada com GET e com a variável cfilme definida
if (isset($_GET['cfilme'])) {
	$cod = filter_input(INPUT_GET, 'cfilme');
	
 	$queryEliminar = "DELETE FROM filmes WHERE codfilmes='$cod'";
		
	$resultado = $ligacao->query($queryEliminar);
    if($ligacao->affected_rows>0) {
        header("Location: index.php?msg=filmeEliminado");
    }
    else {
        header("Location: index.php?msg=filmeNaoEliminado");
    }
}



