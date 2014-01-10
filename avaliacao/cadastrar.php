<?php
    require_once("menu.php");
    
    session_start();
    
    $nomeProduto = $_REQUEST["nomeProduto"];
    $produtoNovo = $_REQUEST["produtoNovo"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    $detalhes = $_REQUEST["detalhes"];
    
    
    if(!isset($_SESSION["cadastroProdutos"])) {
        $_SESSION["cadastroProdutos"] = array();
    }
        
        $produto = array("nomeProduto" => $nomeProduto, "produtoNovo" => $produtoNovo, "cor" => $cor, "prazo" => $prazo, "detalhes" => $detalhes);
        
        array_push($_SESSION["cadastroProdutos"], $produto);
        
        echo "Cadastro realizado com sucesso!";
    ?>
