<?php

$mes1 = 0;
$mes2 = 0;
$mes3 = 0;
$media = 0;
$previsao = 0;

$mes1 = $_POST["mes1"];
$mes2 = $_POST["mes2"];
$mes3 = $_POST["mes3"];

$media = ($mes1+$mes2+$mes3)/3; 
$previsao = ($media/2.50) * 3.50;
echo $previsao;

?>

