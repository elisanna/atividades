<?php

date_default_timezone_set("Brazil/East");

$dataAtual = getdate();

$dia = $dataAtual["mday"];
$mes = $dataAtual["mon"];
$ano = $dataAtual["year"];
$diaSemana = $dataAtual["wday"];
$horas = $dataAtual["hours"] -1;
$minutos = $dataAtual["minutes"];
 
switch ($diaSemana){
	case 0 :
	echo "Domingo";
 	break;
 
	case 1 :
	echo "Segunda-Feira";
	break;
 
	case 2 :
 	echo "Terca-Feira";
	break;
 
	case 3 :
	echo "Quarta-Feira";
	break;
 
	case 4 :
	echo "Quinta-Feira";
	break;
 
	case 5 :
	echo "Sexta-Feira";
	break;
 
	case 6 :
	echo "Sabado";
	break;
}
	
echo "                                      " . "<br/><br/>" .  $dia . "/" . $mes . "/" . $ano; 
echo "<br/><br/>";
$horas = str_pad($horas, 2, "0", STR_PAD_LEFT);
$minutos = str_pad($minutos, 2, "0", STR_PAD_LEFT);


echo $horas . ":" . $minutos;
?>



