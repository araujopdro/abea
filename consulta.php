<?php
	session_start();

	$nome = $_POST['nome'];

	include_once("conectar.php");

	mysqli_query($bd, "SET NAMES 'utf8'");
	mysqli_query($bd, 'SET character_set_connection=utf8');
	mysqli_query($bd, 'SET character_set_client=utf8');
	mysqli_query($bd, 'SET character_set_results=utf8');

	if ($stmt = $bd->prepare('SELECT * FROM characters WHERE nome = ?')) {
		$stmt->bind_param('s', $_POST['nome']);
		$stmt->execute();
		$result = $stmt->get_result();
		$num_of_rows = $result->num_rows;
		//$stmt->store_result();

		if ($num_of_rows > 0) {
			$stmt->bind_result($res);
			$stmt->fetch();

			$value = array('response' => $res);
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