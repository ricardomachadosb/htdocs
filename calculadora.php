<?php

	$operando1 = $_REQUEST["operando1"];
	$operando2 = $_REQUEST["operando2"];
	
	$operador = $_REQUEST["bok"];
	$resultado = 0;
	$times = 0;
	
	if ($operador == "+"){
		$resultado = $operando1 + $operando2;
	} elseif ($operador == 	"-"){
		$resultado = $operando1 - $operando2;
	} elseif ($operador == "*"){
		$resultado = $operando1 * $operando2;
	} elseif ($operador == "/"){
		$resultado = $operando1 / $operando2;
	} elseif ($operador == "x2"){
		while ($times < $operando1){
			$times++;
			$resultado += $operando1;
		}
	} elseif ($operador == "x3"){
///		$resultado = ($operando1 * $operando1);
		$resultado = 1;
		do{
			$times++;
			$resultado *= $operando1;
		}
		while ($times < 3);
	}else if($operador == "xy"){
		$resultado = 1;
		for($i = 0; $i < $operando2; $i ++){
			$resultado *= $operando1;
		}
	}else if($operador == "x!"){
		$resultado = $operando1;
		for($i = ($operando1 - 1); $i > 0; $i --){
			$resultado *= $i;
		}
	}
	
	
	echo $resultado;
		
?>
