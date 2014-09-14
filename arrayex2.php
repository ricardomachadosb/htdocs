<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> :: array :: </title>
	<style>
		table, td, th.borda { border: 1px solid black;}
	</style>
</head>

<body>

    <?php
		$vendas = array ("2006"=>array("jan"=>200, "fev"=>550.70, "mar"=>900.99),
			"2007"=>array("jan"=>810, "fev"=>830.89, "mar"=>999.10),
			"2008"=>array("jan"=>710, "fev"=>1230, "mar"=>1150.90),
			"2009"=>array("jan"=>1720, "fev"=>1370, "mar"=>1950)
		);
		
		$totalMes = array("jan" => 0, "fev" => 0, "mar" => 0);
		
		echo "<table>";
			echo "<tbody>";
				echo "<tr>";
					echo "<th></th>";
					echo "<th class='borda'>Janeiro</th>";
					echo "<th class='borda'>Fevereiro</th>";
					echo "<th class='borda'>Marco</th>";
					echo "<th class='borda'>Total</th>";
				echo "</tr>";
				foreach($vendas as $ano => $val){
					echo "<tr>";
						$total = 0;
						echo "<td>". $ano . "</td>";
						foreach($val as $key => $val2){
								$totalMes[$key] += $val2;
								$total += $val2;
								echo "<td>".$val2 ."</td>";
						}
						echo "<td>". $total . "</td>";
					echo "</tr>";
				}
				echo "<tr>";
					echo "<td>total</td>";
					$totalTotal = 0;
					foreach($totalMes as $value){
						$totalTotal += $value;
						echo "<td>".$value."</td>";
					}
					echo "<td>" . $totalTotal . "</td>";
				echo "</tr>";
					
			echo "</tbody>";
		echo "</table>";
		
	?>
    
</body>
</html>
