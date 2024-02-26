<?php
include('ligacao.php');

//Verificar se o método de pedido de página foi POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //criar variáveis para cada dado a inserir na base de dados
    $nome=filter_input(INPUT_POST, 'nome');
    $duracao = filter_input(INPUT_POST, 'duracao');
    $class = filter_input(INPUT_POST, 'classificacao');
    $genero = filter_input(INPUT_POST, 'genero');
    $codforn = filter_input(INPUT_POST, 'fornecedor');
    $val = filter_input(INPUT_POST, 'valAluguer');
    $cod = filter_input(INPUT_POST, 'cFilme');
    
    $queryAtualiza="UPDATE filmes SET nome ='$nome', classificacao='$class', duracao='$duracao',";
    $queryAtualiza .= " codgenero='$genero', codfornecedor='$codforn', valoraluguer='$val' WHERE Codfilmes='$cod'";
    
    try {
        $resultado = $ligacao->query($queryAtualiza);
        header("Location: index.php?msg=filmeatualizado");
        return $resultado;
        
    }
    catch(Exception $e) {
        echo ' Falha a atualizar consulta: '. $ligacao->error;
        return 0;
    }

    
}   //Sair se o pedido não vier em formato POST
else {
    //Redireciona para a página inicial
    header("Location: index.php?msg=metodoerrado");
}



?>