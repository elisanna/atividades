<?php

   
    function validaPessoa($nome, $cpf, $nascimento, $sexo, $estado, $telefone, $observacoes){
         $camposValidados = true;
    
    
//$nome
    
            $nome = trim($nome);
                if(empty($nome)) {
                    echo "<br/>Por favor, Preencha o campo Nome <br/>";
                    $camposValidados = false;
    }  
                if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s]+$/", $nome)){
                    echo "O Campo Nome permite somente Letras.";
                    $camposValidados = false;
    }
//$cpf        
            
            $cpf = trim($cpf);
                if(empty($cpf)) {
                    echo "<br/>Por favor, preencha o campo CPF, é necessário para efetuar o cadastro. <br/>";
                    $camposValidados = false;
    }
            
                if(!preg_match("/^\d{3}\\.\d{3}\\.\d{3}\\-\d{2}$/",$cpf)){
                    echo "Formato do CPF inválido, Verifique se não está faltando Ponto e Traço<br/>";
                    $camposValidados = false;
    }
    
//$nascimento
            $nascimento = trim($nascimento);
                if(empty($nascimento)) {
                    echo "Por favor, Preencha o campo Data de Nascimento <br/>";
                    $camposValidados = false;
    }
                if(!preg_match("/^\d{2}\\/\d{2}\\/\d{4}$/", $nascimento)){
                    echo "Formato inválido de data de Nascimento. Utilize o formato dd/mm/aaaa <br/>";
                    $camposValidados = false;               
        }
            else{
                $pedacos = explode('/', $nascimento);
                $dia = $pedacos[0];
                $mes = $pedacos[1];
                $ano = $pedacos[2];
            
                if(!checkdate($mes, $dia, $ano)){
                    echo "Data inválida";
                    $camposValidados = false;           
                }           
            else {
                    $dataYmd = $ano.$mes.$dia;
                    $dataAtual = date('Ymd');
                }
                if ($dataAtual < $dataYmd){
                    echo "Não é possivel cadastrar Datas de Nascimento no futuro. <br/>"; 
                    $camposValidados = false;
                }
            }
//$sexo
    
                if(!isset($sexo)) {
                    echo "Por favor, Preencha o campo Sexo <br/>";
                    $camposValidados = false;
    }
    
//$estado
                if($estado == "-1") {
                    echo "Por favor, Selecione o Estado desejado <br/>";
                    $camposValidados = false;
    }
//$telefone
        $telefone = trim($telefone);
                if(empty($telefone)) {
                    echo "Por favor, preencha o campo Telefone. <br/>";
                    $camposValidados = false;
    }
    
                else if (!preg_match("/^\d{3}\\?\s\d{4}\\-?\d{4}$/", $telefone)){ 
                    echo "O Campo Telefone aceita apenas números <br/>";
                    $camposValidados = false;
    }
    
// $observacoes

        $observacoes = trim ($observacoes);
                if(empty($observacoes)) {
                    echo "Por favor, Preencha o campo observações. <br/>";
                    $camposValidados = false;
    }
            else if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s\\.\\,]+$/", $observacoes)){
                    echo "Formato inválido de Texto. O Campo obsevações permite apenas Letras, Letras acentuadas, espaço, Pontos e Virgula. <br/>";
                    $camposValidados = false;
        }
        
    return $camposValidados;
    }            
    
?>
