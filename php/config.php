<?php
date_default_timezone_set('America/Sao_Paulo');

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;

$bd = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db); 
$data = date('d/m/Y H:i:s', time());

mysqli_query($bd, "SET NAMES 'utf8'");
mysqli_query($bd, 'SET character_set_connection=utf8');
mysqli_query($bd, 'SET character_set_client=utf8');
mysqli_query($bd, 'SET character_set_results=utf8');

$table = "chars";

if ($mysqli->connect_errno) {
    echo "Erro de conexão com localhost, o seguinte erro ocorreu -> ";
    echo "Error: Erro de conexão com banco de dados, o seguinte erro ocorreu -> \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
}?>