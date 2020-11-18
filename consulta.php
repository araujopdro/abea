<?php
	session_start();
	include_once("conectar.php");
	
	$nome = $_POST['nome'];

	if ($stmt = $bd->prepare('SELECT nacionalidade FROM characters WHERE nome = ?')) {
		$stmt->bind_param('s', $_POST['nome']);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows > 0) {
			$stmt->bind_result($nacionalidade);
			$stmt->fetch();

			$value = array('response' => $nacionalidade);
          	header('Content-Type: application/json;');
          	echo json_encode($value);
		} else {
			$value = array('response' => -1);
          	header('Content-Type: application/json;');
          	echo json_encode($value);
		}
		$stmt->close();
	}
?>