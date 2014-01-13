<html>
    <head>
        <title>Cadastro de Livros</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>Digite o código do livro para editar:</label>
            <br/>
              <input type="text" name="id" />
              <br/>
              <br/>
            <?php require_once("campos_pessoa.php"); ?>
            <input type="submit" value="Editar" />
        </form>
    </body>
    </html>
    <?php
    session_start();
         if(isset($_SESSION["cadastroLivros"])) {
        $cadastroLivros = $_SESSION["cadastroLivros"];

        foreach($cadastroLivros as $id => $livro){
            if ($livro != null){
            echo "[$id] => " . $livro["nomeLivro"] . "<br />";
            }
        }
    }
    else{
        echo "Não existem livros cadastrados.";
        }
?>
