<?php
    require_once("menu.php");
    
    session_start();
    
    $id = $_REQUEST["id"];
    $nomeProduto = $_REQUEST["nomeProduto"];
    $produtoNovo = $_REQUEST["produtoNovo"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    $detalhes = $_REQUEST["detalhes"];
    
    if(!isset($_SESSION["cadastroProdutos"])) {
        echo "Não existem cadastros para editar";
    }
        else{
            $cadastroProdutos =& $_SESSION["cadastroProdutos"];
            
            $produto = array("nomeProduto" => $nomeProduto, "novoProduto" => $nomeProduto, "cor" => $cor, "prazo" => $prazo, "detalhes" => $detalhes);
            $cadastroProdutos[$id] = $produto;
        }
    
    echo "Edição efetuado com sucesso!";
?>

    
