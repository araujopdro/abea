<?php
	session_start();

	date_default_timezone_set('America/Sao_Paulo');
	$data = date('d/m/Y H:i:s', time());
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$perfil = $_POST['perfil'];
	$nacionalidade = $_POST['nacionalidade'];
	$etnia = $_POST['etnia'];
	$dinheiro = $_POST['dinheiro'];
	$bens = $_POST['bens'];
	$caracteristicas = $_POST['caracteristicas'];
	$habilidades = $_POST['habilidades'];
	$historia = $_POST['historia'];

	include_once("conectar.php");

	mysqli_query($bd, "SET NAMES 'utf8'");
	mysqli_query($bd, 'SET character_set_connection=utf8');
	mysqli_query($bd, 'SET character_set_client=utf8');
	mysqli_query($bd, 'SET character_set_results=utf8');

	mysqli_query($bd, "UPDATE characters 
		SET `nome`='$nome',
			`perfil`='$perfil',
			`idade`='$idade',
			`nacionalidade`='$nacionalidade',
			`etnia`='$etnia',
			`caracteristicas`='$caracteristicas',
			`habilidades`='$habilidades',
			`dinheiro`='$dinheiro',
			`historia`='$historia',
			`bens`='$bens'
		WHERE `id` = '$id'")or die(mysqli_error($bd));
?>