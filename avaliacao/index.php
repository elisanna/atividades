<?php
    require_once("menu.php");
    
    session_start();
    if(isset($_SESSION["cadastroProdutos"])) {
        $cadastroProdutos = $_SESSION["cadastroProdutos"];
    
    echo "<dl>";
    foreach ($cadastroProdutos as $produto){
        if($produto != null) {
            $nomeProduto = $produto["nomeProduto"];
            $produtoNovo = $produto["produtoNovo"];
            $cor = $produto["cor"];
            $prazo = $produto["prazo"];
            $detalhes = $produto["detalhes"];
     
     echo "<dt class='$nomeProduto'>" . $produto["nomeProduto"] . "</dt>";
     
     echo "<dd>Nome do Produto: " . $nomeProduto . "</dd>";
     echo "<dd>Produto Novo " . $produtoNovo . "</dd>";
     echo "<dd>Cor do Produto " . $cor . "</dd>";
     echo "<dd> Prazo de entrega " . $prazo . "</dd>";
     echo "<dd> Detalhes do Produto " . $detalhes . "</dd>";
     
      }
        }
        echo "</dl>";
    }
    else {
        echo "Não existem pessoas cadastradas.";
        }
?>
    
    
