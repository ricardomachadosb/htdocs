<html>
	<head>
		<style>
		.l1{background-color: #FF0000;}
		.l2{background-color: #0000FF;}
		table, td { border: 1px solid black;}
		</style>
	</head>
	<body>
		<?php 
			$colunas = $_GET["colunas"];
			$linhas = $_GET["linhas"];
			
			echo "<table>";
			echo "<tbody>";
			for($i = 1; $i <= $linhas; $i++){
				$classe = "";
				if(($i % 2) == 1){
					$classe = "l1";
				}else {
					$classe = "l2";
				}
				echo "<tr ". "class='" . $classe ."'>";
				for($ii = 1; $ii <= $colunas; $ii++){
					echo "<td>" . $i . "," . $ii . "</td>";
				}
				echo "</tr>";
			}
		?>
	</body>
</html>