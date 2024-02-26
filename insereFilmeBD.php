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
    
    $queryInsere="INSERT INTO filmes (nome, classificacao, duracao, codgenero, codfornecedor, valoraluguer) VALUES ";
    $queryInsere .= " ('$nome', '$class', '$duracao', '$genero', '$codforn', '$val')";
    
    try {
        $resultado = $ligacao->query($queryInsere);
        header("Location: index.php");
        return $resultado;
        
    }
    catch(Exception $e) {
        echo ' Falha a inserir consulta: '. $ligacao->error;
        return 0;
    }

    
}   //Sair se o pedido não vier em formato POST
else {
    //Redireciona para a página inicial
    header("Location: index.php");
}



?>