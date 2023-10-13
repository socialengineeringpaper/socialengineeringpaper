<?php
//**********************************************************************			
if (!isset($_GET["pg"])) // variavel $pg &eacute; a pagina atual
	$pg = 0;

$inicial = $_GET["pg"] * $resultados; // n&uacute;mero de resultados por tela					

$bd->query($sql); 
$total_records = $bd->numeroDeRegistros();
$pages = intval($total_records / $resultados); 
?>