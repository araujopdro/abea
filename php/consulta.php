<?php
	session_start();
	include_once("conectar.php");

	mysqli_query($bd, "SET NAMES 'utf8'");
	mysqli_query($bd, 'SET character_set_connection=utf8');
	mysqli_query($bd, 'SET character_set_client=utf8');
	mysqli_query($bd, 'SET character_set_results=utf8');

	if ($stmt = $bd->prepare('SELECT id,nome,perfil,idade,nacionalidade,etnia,caracteristicas,habilidades,dinheiro,bens,historia FROM characters WHERE id = ?')) {
		$stmt->bind_param('s', $_POST['id']);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows > 0) {
			$stmt->bind_result($id,$nome,$perfil,$idade,$nacionalidade,$etnia,$caracteristicas,$habilidades,$dinheiro,$bens,$historia);
			$stmt->fetch();

			$value = array('id' => $id, 'nome' => $nome,'perfil' => $perfil,'idade' => $idade,'nacionalidade' => $nacionalidade,'etnia' => $etnia,'caracteristicas' => $caracteristicas,'habilidades' => $habilidades,'dinheiro' => $dinheiro,'bens' => $bens,'historia' => $historia);
          	header('Content-Type: application/json;');
          	echo json_encode($value);
		} else {
			$value = array('nome' => -1);
          	header('Content-Type: application/json;');
          	echo json_encode($value);
		}
		$stmt->close();
	}
?>