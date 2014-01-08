<?php
    require_once("menu.php");
    
    session_start();
    
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    
    if(!isset($_SESSION["cadastros"])) {
        $_SESSION["cadastros"] = array();
    }
        
    $pessoa = array("nome" => $nome, "sexo" => $sexo);
    
    array_push($_SESSION["cadastros"], $pessoa);
    
    echo "Cadastro efetuado com sucesso!"
?>

