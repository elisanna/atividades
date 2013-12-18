<?php


$total = 0;
$passagens = 0;

$passagens = $_POST["passagens"];

if ($passagens <= 4){
	$total = $passagens * 1.40;
}
else{
	$total = 1.40 * 4;
	$total = $total + 2.80 * ($passagens - 4);
}
echo "Você gastou com transporte R$: " . number_format($total, 2, ",", "");
	
?>	
