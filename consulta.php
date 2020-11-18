<?php
	session_start();
	include_once("conectar.php");
	
	$nome = $_POST['nome'];

	$result = mysql_query("SELECT * from characters WHERE nome = $nome") or die('Could not query');
	if(mysql_num_rows($result)){
	    echo '{"data":[';

	    $first = true;
	    $row=mysql_fetch_assoc($result);
	    while($row=mysql_fetch_row($result)){
	        if($first) {
	            $first = false;
	        } else {
	            echo ',';
	        }
	        echo json_encode($row);
	    }
	    echo ']}';
	} else {
	    echo '[]';
	}

	mysql_close($db);
?>