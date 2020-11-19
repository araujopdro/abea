<?php
	session_start();

	date_default_timezone_set('America/Sao_Paulo');
	$data = date('d/m/Y H:i:s', time());
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$perfil = $_POST['perfil'];
	$nacionalidade = $_POST['nacionalidade'];
	$etnia = $_POST['etnia'];
	$pts_h = $_POST['pts_h'];
	$dinheiro = $_POST['dinheiro'];
	$bens = $_POST['bens'];
	$caracteristicas = $_POST['caracteristicas'];
	$resistencia = $_POST['resistencia'];
	$habilidades = $_POST['habilidades'];
	$historia = $_POST['historia'];

	include_once("conectar.php");

	mysqli_query($bd, "SET NAMES 'utf8'");
	mysqli_query($bd, 'SET character_set_connection=utf8');
	mysqli_query($bd, 'SET character_set_client=utf8');
	mysqli_query($bd, 'SET character_set_results=utf8');

	mysqli_query($bd, "INSERT INTO characters (`nome`, `perfil`, `idade`, `nacionalidade`, `etnia`, `caracteristicas`, `resistencia`, `habilidades`, `pts_h`, `dinheiro`, `bens`, `historia`) VALUES ('$nome', '$perfil', '$idade', '$nacionalidade', '$etnia', '$caracteristicas', '$resistencia', '$habilidades', '$pts_h', '$dinheiro', '$bens', '$historia')")or die(mysqli_error($bd));
?>