<?php

include "../lib/validaData.php";


$data1 = 0;
$data2 = 0;

$data1 = $_POST["data1"];
$data2 = $_POST["data2"];

$vetor1 = explode ("/", $data1);
$vetor2 = explode ("/", $data2);
$data1Certa = validaData($vetor1[0], $vetor1[1], $vetor1[2]);

if(!$data1Certa) {
	echo " (erros na data inicial)";
}
$data2Certa = validaData($vetor2[0], $vetor2[1], $vetor2[2]);
if(!$data2Certa) {
	echo " (erros na data inicial)";
}



date_default_timezone_set("Brazil/East");
setlocale(LC_ALL, "pt_BR", "ptb");

$dataAtual = date("d-m-Y"); 
 
$dataAtual = strtotime ($dataAtual);
$data1 = strtotime ($data1);
$data2 = strtotime ($data2);

$data1 = str_replace("/", "-", $data1);
$data2 = str_replace("/", "-", $data2);

if ($dataAtual >= $data1 and $dataAtual <= $data2){
	echo "Bom dia para compras!";
}

else {
	echo "Nao &eacute; um bom dia para Compras!";
}


	
?>	

