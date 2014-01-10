<html>
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>Digite o código do Produto para editar:</label>
            <br/>
              <input type="text" name="id" />
              <br/>
              <br/>
            <?php require_once("campos_produto.php"); ?>
            <input type="submit" value="Editar" />
        </form>
    </body>
    </html>
    <?php
        session_start();
         if(isset($_SESSION["cadastroProdutos"])) {
        $cadastroProdutos = $_SESSION["cadastroProdutos"];

        foreach($cadastroProdutos as $id => $produto){
            if ($produto != null){
            echo "[$id] => " . $produto["nomeProduto"] . "<br />";
            }
        }
    }
    else{
        echo "Não existem pessoas cadastradas.";
        }
?>
