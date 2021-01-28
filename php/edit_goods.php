<?php
	session_start();

	date_default_timezone_set('America/Sao_Paulo');
	$data = date('d/m/Y H:i:s', time());
	$id = $_POST['id'];
	$dinheiro = $_POST['dinheiro'];
	$bens = $_POST['bens'];

	include_once("conectar.php");

	mysqli_query($bd, "SET NAMES 'utf8'");
	mysqli_query($bd, 'SET character_set_connection=utf8');
	mysqli_query($bd, 'SET character_set_client=utf8');
	mysqli_query($bd, 'SET character_set_results=utf8');

	mysqli_query($bd, "UPDATE characters 
		SET `dinheiro`='$dinheiro',
			`bens`='$bens'
		WHERE `id` = '$id'")or die(mysqli_error($bd));
?>