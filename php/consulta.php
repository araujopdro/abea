<?php
	session_start();
	include_once("config.php");

	$sql = "SELECT nome FROM ".$table." ORDER BY id DESC";
	$result = mysqli_query($bd, $sql) or die("Erro ao retornar dados");
	
	$data = array();
	
	while ($rows = $result->fetch_assoc()){
		$data[] = $rows;
	}
	
	header('Content-type: application/json');
	echo json_encode($data);
	exit;
?>