<?php

$chocolateBranco = 0;
$chocolatePreto = 0;
$contagem = 0;
$promocaoP = 0;
$promocaoB = 0;

$chocolateBranco = $_POST["chocolateBranco"];
$chocolatePreto = $_POST["chocolatePreto"];

$contagem = 3;
while ($contagem <= $chocolatePreto){
	$promocaoB = $promocaoB + 1;
	$contagem = $contagem + 3;
	
}
	
$contagem = 2;
while ($contagem <= $chocolateBranco){ 
	$promocaoP = $promocaoP + 1;
	$contagem = $contagem + 2;
}

$contagem = 5;
while ($contagem <= ($chocolateBranco + $chocolatePreto)){
	$promocaoB = $promocaoB + 1;
	$contagem = $contagem + 5;
	 
}

echo "A Quantidade de Chocolates Brancos &eacute;: " . ($promocaoB + $chocolateBranco) . "<br/>";
echo "A Quantidade de Chocolates Pretos &eacute;: " . ($promocaoP + $chocolatePreto) . "<br/>";

	
?>	

