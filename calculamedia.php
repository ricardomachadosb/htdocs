<html>
	<head>
	<style>
		.aprovado{color:green; display:inline;}
		.reprovado{color:red; display:inline;}
		.Avaliacao{color:yellow; display:inline;}
	</style>
	<?php
		$aluno = $_GET["aluno"];
		$diciplina = $_GET["diciplina"];
		$numeroAulas = intval($_GET["numeroAulas"]);
		$numeroAuxencias = intval($_GET["numeroAuxencias"]);
		$nota1 = floatval($_GET["nota1"]);
		$nota2 = floatval($_GET["nota2"]);
		$nota3 = floatval($_GET["nota3"]);
		$media = ($nota1 + $nota2 + $nota3) / 3;
		$percentagemFrequencia  = (($numeroAulas - $numeroAuxencias) / $numeroAulas) * 100;
		$percentagemFrequenciaFormatada = $percentagemFrequencia + "%";
		$conceito = "";
		if($media >= 7.0 && $percentagemFrequencia >= 75){
			$conceito = "Aprovado";
		} else if($media >= 3.0 && $percentagemFrequencia >= 75){
			$conceito = "Avaliacao complementar";
		}else{
			$conceito = "Reprovado";
		}
		
		echo ("Nome: " . strtoupper($aluno) . "<br>");
		echo  ("Diciplina: ".$diciplina . "<br>");
		echo "media:" . number_format($media, 2) . "<br>";
		echo "Frequencia: " . number_format($percentagemFrequencia, 2) . "%<br>";
		echo "Conceito: <div class=".$conceito.">" . $conceito ."</div>";
		
		
		
	?>
	<head>
</html>