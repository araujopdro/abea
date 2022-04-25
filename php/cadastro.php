<?php
	session_start();
	include_once("config.php");
	
	$nome = $_POST['nome'];

	$query_cadastro = "INSERT INTO ".$table." (`name`) VALUES ('$nome')";
	
	mysqli_query($bd, $query_cadastro)or die(mysqli_error($bd));
	$this_id = $bd->insert_id;

	$value = array('response' => $this_id);
	header('Content-Type: application/json;');
	echo json_encode($value);
?>