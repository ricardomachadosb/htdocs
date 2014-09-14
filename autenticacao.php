<?php

include "usuarios.php";

$usuario = $_REQUEST["usuario"];
$senha = $_REQUEST["senha"];

if (in_array($usuario, array_keys($autenticacao)) && ((in_array($senha, array_values($autenticacao))))){
	
	header("Location: autenticado.php?".$_SERVER['QUERY_STRING']);
} else {
	header("Location: erro.php?".$_SERVER['QUERY_STRING']);
}

?>