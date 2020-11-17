<?php
	session_start();

	date_default_timezone_set('America/Sao_Paulo');
	$data = date('d/m/Y H:i:s', time());
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$perfil = $_POST['perfil'];
	$nacionalidade = $_POST['nacionalidade'];
	$etnia = $_POST['etnia'];
	$caracteristicas = $_POST['caracteristicas'];
	$resistencia = $_POST['resistencia'];
	$habilidades = $_POST['habilidades'];
	$historia = $_POST['historia'];

	include_once("conectar.php");

	mysqli_query($bd, "SET NAMES 'utf8'");
	mysqli_query($bd, 'SET character_set_connection=utf8');
	mysqli_query($bd, 'SET character_set_client=utf8');
	mysqli_query($bd, 'SET character_set_results=utf8');

	mysqli_query($bd, "INSERT INTO characters (`nome`, `perfil`, `idade`, `nacionalidade`, `etnia`, `caracteristicas`, `resistencia`, `habilidades`, `historia`) VALUES ('$nome', '$perfil', '$idade', '$nacionalidade', '$etnia', '$caracteristicas', '$resistencia', '$habilidades', '$historia')")or die(mysqli_error($bd));

	// if ($stmt = $bd->prepare('SELECT email FROM itaucultural WHERE email = ?')) {
	// 	$stmt->bind_param('s', $_POST['email']);
	// 	$stmt->execute();
	// 	$stmt->store_result();

	// 	if ($stmt->num_rows > 0) {
	// 		$value = array('response' => -1);
 //          	header('Content-Type: application/json;');
 //          	echo json_encode($value);
	// 	} else {
	// 		$_SESSION['nome'] = $nome;
	// 		$_SESSION['email'] = $email;

	// 		mysqli_query($bd, "INSERT INTO itaucultural (`nome`, `email`, `cidade`, `estado`, `aceito`) VALUES ('$nome', '$email', '$cidade', '$estado', '$aceito')")or die(mysqli_error($bd));
			
	// 		mysqli_query($bd, "INSERT INTO itaucultural_logs (`email`, `data`) VALUES ('$email', '$data')")or die(mysqli_error($bd));

	// 		$value = array('response' => 1);
 //          	header('Content-Type: application/json;');
 //          	echo json_encode($value);
	// 	}
	// 	$stmt->close();
	// }
?>