<?php

$produtos = array("arroz" => 1, "feijao" => 2, "sal" => 3);

$meses = array("janeiro" => array("arroz" => 1, "feijao" => 2, "sal" => 3), "fevereiro" => array("arroz" => 1, "feijao" => 2, "sal" => 3), "marco" => array("arroz" => 1, "feijao" => 2, "sal" => 3));

$lojas = array("filialSP" =>  array("janeiro" => array("arroz" => 1, "feijao" => 2, "sal" => 3), "fevereiro" => array("arroz" => 1, "feijao" => 2, "sal" => 3), "marco" => array("arroz" => 1, "feijao" => 2, "sal" => 3)),
				"filialRJ" =>  array("janeiro" => array("arroz" => 1, "feijao" => 2, "sal" => 3), "fevereiro" => array("arroz" => 1, "feijao" => 2, "sal" => 3), "marco" => array("arroz" => 1, "feijao" => 2, "sal" => 3)));

// só faço assim quando for um array
foreach ($lojas as $nomeFilial => $value){
	foreach ($value as $nomeMes => $value2){
		foreach ($value2 as $nomeProduto => $value3){
			
			echo "Na loja " . $nomeFilial . " no mes " . $nomeMes . " o produto " . $nomeProduto . " custava " . $value3 . "<br>";
		}
	}
}




?>