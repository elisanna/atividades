<?php
    require_once("menu.php");
    
    session_start();
    
    $id = $_REQUEST["id"];
    
    if(!isset($_SESSION["cadastroProdutos"])) {
        echo "Não existem cadastros para remover";
        }
        else{
            $cadastroProdutos =& $_SESSION["cadastroProdutos"];
            $cadastroProdutos[$id] = null;
        }
    
    echo "Remoção efetuado com sucesso!";
?>
