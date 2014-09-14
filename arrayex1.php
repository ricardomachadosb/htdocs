<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> :: Calculadora :: </title>
</head>

<body>

    <?php
		$meses = array("Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
		echo "<select name='meses'>";
			for($i = 1; $i <= count($meses); $i++){
				echo "<option value='" . $i ."'>". $meses[$i-1]."</option>";
			}
		echo "</select>";
		
	?>
    
</body>
</html>
